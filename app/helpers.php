<?php

use App\Http\Controllers\UserController;
use App\Models\Critic;
use App\Models\Role;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

function get_meters_between_points($latitude1, $longitude1, $latitude2, $longitude2)
{
    if (($latitude1 == $latitude2) && ($longitude1 == $longitude2)) {
        return 0;
    } // distance is zero because they're the same point
    $p1 = deg2rad($latitude1);
    $p2 = deg2rad($latitude2);
    $dp = deg2rad($latitude2 - $latitude1);
    $dl = deg2rad($longitude2 - $longitude1);
    $a = (sin($dp / 2) * sin($dp / 2)) + (cos($p1) * cos($p2) * sin($dl / 2) * sin($dl / 2));
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $r = 6371008; // Earth's average radius, in meters
    $d = $r * $c;
    return $d; // distance, in meters
}

function getPreviousMonth(array $parts): string
{
    // $parts = explode('-', $month);
    $monthNum = (int) $parts[0];
    $year = (int) $parts[1];

    if ($monthNum === 1) {
        $monthNum = 12;
        $year--;
    } else {
        $monthNum--;
    }

    $monthStr = str_pad($monthNum, 2, '0', STR_PAD_LEFT);
    // return $monthStr . '-' . $year;
    return $monthStr . '-' . $year;
}

function phoneGeneralize($phone)
{
    $phone = (preg_replace('/[^0-9]/', '', trim($phone)));
    if (substr($phone, 0, 1) == '0') $phone = '62' . substr($phone, 1);
    if (substr($phone, 0, 1) == '8') $phone = '628' . substr($phone, 1);
    if (substr($phone, 0, 4) == '6208') $phone = '628' . substr($phone, 4);
    return '+' . $phone;
}

function ResponseAPI($data, $status = 200)
{
    if ($status === false)
        $status = 403;
    if ($status === true)
        $status = 200;
    if (is_string($data))
        $data = ['message' => $data];
    return response()->json($data, $status);
}

function get_distance_between_points($latitude1, $longitude1, $latitude2, $longitude2)
{
    $meters = get_meters_between_points($latitude1, $longitude1, $latitude2, $longitude2);
    $kilometers = $meters / 1000;
    $miles = $meters / 1609.34;
    $yards = $miles * 1760;
    $feet = $miles * 5280;
    return compact('miles', 'feet', 'yards', 'kilometers', 'meters');
}

function uploadFoto($file, $folder = "uploads", $resize = false)
{
    $filename = time() . '-' . $file->getClientOriginalName();
    $path = $folder . '/' . $filename;
    $image = Image::make($file);
    $image = $image->orientate();
    if ($image->width() > $image->height()) {
        $image = $image->resize(2048, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
    } else {
        $image = $image->resize(null, 2048, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
    }
    Storage::disk('public')->put($path, (string) $image->encode());
    if ($resize != false) {
        if (is_array($resize)) {
            $image = Image::make($file)->fit($resize[0], $resize[1]);
            $image = $image->orientate();
            Storage::disk('public')->put($path, (string) $image->encode());
        }
        if ($resize === true) {
            $thumbnail = Image::make($file)->fit(300, 300);
            $preview = Image::make($file)->fit(600, 400);
            $thumbnail = $thumbnail->orientate();
            $preview = $preview->orientate();
            Storage::disk('public')->put(generateInFolderFilename($path, 'preview'), (string) $preview->encode());
            Storage::disk('public')->put(generateInFolderFilename($path, 'thumbnail'), (string) $thumbnail->encode());
        }
        if ($resize === 'book') {
            $thumbnail = Image::make($file)->fit(300, 300);
            $preview = Image::make($file)->fit(400, 600);
            $thumbnail = $thumbnail->orientate();
            $preview = $preview->orientate();
            Storage::disk('public')->put(generateInFolderFilename($path, 'preview'), (string) $preview->encode());
            Storage::disk('public')->put(generateInFolderFilename($path, 'thumbnail'), (string) $thumbnail->encode());
        }
    }
    return '/storage/' . $path;
}

function generateInFolderFilename($path, $folder, $windows = false)
{
    $d = $windows ? "\\" : "/";
    $pathArr = explode($d, $path);
    $filename = $pathArr[count($pathArr) - 1];
    $pathArr[count($pathArr) - 1] = $folder;
    $pathArr[] = $filename;
    return implode($d, $pathArr);
}


function roleChecker($roleFromData, $roleWanted): bool
{
    // if (stripos($roleFromData, $roleWanted) !== false) {
    //     return true;
    // } else {
    //     return false;
    // }
    // dd($roleFromData);
    $roles = explode(',', $roleWanted);
    foreach ($roles as $role) {
        if (stripos($roleFromData, $role) !== false) {
            return true;
        }
    }
    return false;
}

function mutipleStringChecker($roleFromData, $roleWanted): bool
{
    $roles = explode(',', $roleWanted);
    foreach ($roles as $role) {
        if (stripos($roleFromData, $role) !== false) {
            return true;
        }
    }
    return false;
}

function convertToInteger($string)
{
    if ($string == null) {
        return 0;
    }
    $string = str_replace(".", "", $string);

    return (int) $string;
}


function uploadFile($file, $folder)
{
    if ($file == null or !$file->isValid()) {
        // dd($file);
        return null;
    }
    $filename = time() . Str::random(10) . '_' . $file->getClientOriginalName();
    $path = $file->storeAs($folder, $filename, 'public');
    return '/storage/' . $path;
}

function parseDate($date, $format = "l, d F Y")
{
    setlocale(LC_TIME, 'id_ID.utf8');
    $format = str_replace("D", "%a", $format);
    $format = str_replace("l", "%A", $format);
    $format = str_replace("j", "%e", $format);
    $format = str_replace("d", "%d", $format);
    $format = str_replace("N", "%u", $format);
    $format = str_replace("w", "%w", $format);
    $format = str_replace("M", "%b", $format);
    $format = str_replace("m", "%m", $format);
    $format = str_replace("F", "%B", $format);
    $format = str_replace("Y", "%Y", $format);
    $format = str_replace("y", "%y", $format);
    $format = str_replace("H", "%H", $format);
    $format = str_replace("i", "%M", $format);
    $format = str_replace("s", "%S", $format);
    try {
        // $ret = Carbon\Carbon::parse($date)->format($format);
        // $ret = Carbon\Carbon::parse($date)->formatLocalized($format);
        $ret = Carbon\Carbon::parse($date)->formatLocalized($format);
    } catch (Exception $e) {
        $ret = false;
    }
    if (str_contains($ret, 'Monday'))
        $ret = str_replace('Monday', 'Senin', $ret);
    if (str_contains($ret, 'Tuesday'))
        $ret = str_replace('Tuesday', 'Selasa', $ret);
    if (str_contains($ret, 'Wednesday'))
        $ret = str_replace('Wednesday', 'Rabu', $ret);
    if (str_contains($ret, 'Thursday'))
        $ret = str_replace('Thursday', 'Kamis', $ret);
    if (str_contains($ret, 'Friday'))
        $ret = str_replace('Friday', 'Jumat', $ret);
    if (str_contains($ret, 'Saturday'))
        $ret = str_replace('Saturday', 'Sabtu', $ret);
    if (str_contains($ret, 'Sunday'))
        $ret = str_replace('Sunday', 'Minggu', $ret);

    $nmeng = ['January', 'February ', 'March ', 'April', 'May ', 'June ', 'July ', 'August ', 'September', 'October ', 'November ', 'December'];
    $nmtur = ['Januari', 'Februari ', 'Maret ', 'April', 'Mei ', 'Juni ', 'Juli ', 'Agustus ', 'September', 'Oktober ', 'November ', 'Desember'];
    $ret = str_ireplace($nmeng, $nmtur, $ret);
    return $ret;
}

function convertToIndonesianMonth($monthNumber)
{
    switch ($monthNumber) {
        case 1:
            return 'Januari';
        case 2:
            return 'Februari';
        case 3:
            return 'Maret';
        case 4:
            return 'April';
        case 5:
            return 'Mei';
        case 6:
            return 'Juni';
        case 7:
            return 'Juli';
        case 8:
            return 'Agustus';
        case 9:
            return 'September';
        case 10:
            return 'Oktober';
        case 11:
            return 'November';
        case 12:
            return 'Desember';
        default:
            return '';
    }
}

function numbFormat($price, $decimal = true)
{
    if ($price == null) {
        $price = 0;
    }

    if ($decimal == true) {
        return "Rp " . \number_format($price, 0, ',', '.');
    }
    return "Rp " . \number_format($price);
}

function numbFormatUSD($price, $decimal = true)
{
    if ($price == null) {
        $price = 0;
    }

    if ($decimal == true) {
        return "$ " . \number_format($price, 2, ',', '.');
    }
    return "$ " . \number_format($price);
}

function moneyFormat($price, $decimal = true)
{
    if ($price == null) {
        $price = 0;
    }

    if ($decimal == true) {
        return \number_format($price, 0, ',', '.');
    }
    return \number_format($price);
}


function getCountTwoDate($start, $end)
{
    $start = Carbon\Carbon::parse($start);
    $end = Carbon\Carbon::parse($end);
    $count = $start->diffInDays($end);
    return $count;
}

function penyebut($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = penyebut($nilai - 10) . " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
    }
    return $temp;
}

function terbilang($nilai)
{
    if ($nilai < 0) {
        $hasil = "minus " . trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }
    return $hasil;
}

/* 
function sendMessage($title, $message, $data, $device_id, $send_all = false, $image = null)
{
    $content = array("en" => $message);
    $heading = ['en' => $title];

    $device_ids = is_array($device_id) ? $device_id : [$device_id];
    if (!$send_all && count($device_ids) > 2000) {
        $device_ids_wrap = array_chunk($device_ids, 2000);
        foreach ($device_ids_wrap as $deviceids) {
            sendMessage($title, $message, $data, $deviceids, false, $image);
        }
        return true;
    }
    $app_id = "789790b0-b71b-4f3b-8338-4810a48f7413";
    $rest_api_key = "YzhhYjI5ZmYtNjVhYi00MzMzLTljNWMtNTJlY2JkZDdjZmI2";

    if ($send_all) {
        $fields = array(
            'app_id' => $app_id,
            'included_segments' => ['Subscribed Users'],
            'data' => $data,
            'contents' => $content,
            'headings' => $heading
        );
    } else {
        $fields = array(
            'app_id' => $app_id,
            'include_player_ids' => $device_ids,
            'data' => $data,
            'contents' => $content,
            'headings' => $heading
        );
    }

    if ($image != null) {
        $fields['big_picture'] = $image;
    }


    if (count($device_id) > 0)
        foreach ($device_id as $id) {
            $u = User::where('device_id', $id)->first();
            if ($u != null) {
                $notification = new Notification();
                $notification->title = $title;
                $notification->message = $message;
                $notification->user_id = $u->id;
                $notification->save();

                if (array_key_exists('type', $data['data'])) {
                    if ($data['data']['type'] == 'todo') {
                        $notification->type = $data['data']['type'];
                        $notification->save();
                        $todoLists = TodoList::find($data['data']['id']);
                        $todoLists->notifications()->save($notification);
                    }
                    if ($data['data']['type'] == 'loan') {
                        $notification->type = $data['data']['type'];
                        $notification->save();
                        $loan = Loan::find($data['data']['id']);
                        $loan->notifications()->save($notification);
                    }
                    if ($data['data']['type'] == 'presence') {
                        $notification->type = $data['data']['type'];
                        $notification->save();
                    }
                    if ($data['data']['type'] == 'permit') {
                        $notification->type = $data['data']['type'];
                        $notification->save();
                        $permit = Permit::find($data['data']['id']);
                        $permit->notifications()->save($notification);
                    }
                    if ($data['data']['type'] == 'overtime') {
                        $notification->type = $data['data']['type'];
                        $notification->save();
                        $overtime = Overtime::find($data['data']['id']);
                        $overtime->notifications()->save($notification);
                    }
                    if ($data['data']['type'] == 'leave') {
                        $notification->type = $data['data']['type'];
                        $notification->save();
                        $leave = Leave::find($data['data']['id']);
                        $leave->notifications()->save($notification);
                    }

                    if ($data['data']['type'] == 'critic') {
                        $notification->type = $data['data']['type'];
                        $notification->save();
                        $critic = Critic::find($data['data']['id']);
                        $critic->notifications()->save($notification);
                    }
                }
            }
        }


    $fields = json_encode($fields);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        "Authorization: Basic $rest_api_key"
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
*/
