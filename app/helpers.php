<?php

use App\Http\Controllers\UserController;
use App\Models\Critic;
use App\Models\Role;
use App\Models\Setting;
use App\Models\User;
use App\Repositories\UserRepository;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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

function lypsisGetOrderStatusValues($paramStatus)
{
    switch ($paramStatus) {
        case 'Processing':
            return ['Paid', 'ProcessedBySeller'];
        case 'Sending':
            return ['Shipped', 'Delivered'];
        case 'Cancel':
            return ['ExpiredPayment', 'Cancelled'];
        case 'Returning':
            return ['RequestedRefund', 'RefundAccepted', 'RefundDone', 'RefundDeclined', 'RequestedReturn', 'ReturnAccepted', 'ReturnShipped', 'ReturnDelivered', 'ReturnCompleted'];
        default:
            return [$paramStatus];
    }
}

function lypsisRemoveHost($url) {
    return parse_url($url, PHP_URL_PATH);
}

function lypsisGetSetting($name, $default = false, $multiple = false, $names = [])
{
    if ($multiple == false) {

        $s = DB::table('settings')->where("name", $name)->first();
        if ($s == null) return $default;
        return $s->value;
    } else {
        $imploded_strings = implode("','", $names);
        // $s = DB::table('settings')->whereNull('deleted_at')->whereIn("name", $names)->orderByRaw(DB::raw("FIELD(name, '$imploded_strings')"))->get();
        $s = DB::table('settings')
            ->whereNull('deleted_at')
            ->whereIn("name", $names)
            ->orderByRaw("FIELD(name, '$imploded_strings')")
            ->get();
        if ($s == null) return $default;
        return $s->pluck('value');
    }
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

function lypsisAsset($path)
{
    return $path ? url($path) : null;
}

function lypsisConvertPaymentChannelType($channelType)
{
    if (!$channelType) return null;

    $result = null;
    switch ($channelType) {
        case 'E-Wallet':
            $result = 'QR_CODE';
            break;
        case 'Virtual-Account':
            $result = 'VIRTUAL_ACCOUNT';
            break;
        case 'Retail-Outlet':
            $result = 'OVER_THE_COUNTER';
            break;
        default:
            $result = 'PI';
    }

    return $result;
}

function lypsisConvertPaymentChannelTypeIntoParamRequest($channelType)
{
    if (!$channelType) return null;

    $result = null;
    switch ($channelType) {
        case 'E-Wallet':
            $result = 'qr_code';
            break;
        case 'Virtual-Account':
            $result = 'virtual_account';
            break;
        case 'Retail-Outlet':
            $result = 'over_the_counter';
            break;
        default:
            $result = 'pi';
    }

    return $result;
}

function checkShippingPrice($originId, $destinationId, $weight, $earlierMode = false)
{
    $client = new Client();
    // $city = 365; // pontianak
    $originType = 'city';
    // $destination = 55; // bekasi
    $destinationType = 'subdistrict';

    // $destination = 224; // Lampung Selatan
    // $originType = 'city';

    $client = new Client();
    // $city = 365; // pontianak
    $originType = 'city';
    // $destination = 55; // bekasi
    $destinationType = 'subdistrict';

    // checker originId, destinationId and weight if null or empty return responseApi error
    // if ($originId == null || $destinationId == null || $weight <= 0) {
    //     return ResponseAPI('Origin, destination and weight cannot be empty', false);
    // }

    // $destination = 224; // Lampung Selatan
    // $originType = 'city';

    // try {
    //     $res = $client->request('POST', "https://pro.rajaongkir.com/api/cost", [
    //         'headers' => [
    //             'key' => env('RO_KEY')
    //         ],
    //         'json' => [
    //             'origin' => $originId,
    //             'originType' => $originType,
    //             'destination' => $destinationId,
    //             'destinationType' => $destinationType,
    //             'weight' => $weight,
    //             'courier' => env('RO_SERVICES'),
    //         ],
    //         'timeout' => 15,
    //     ]);
    // } catch (\Exception $e) {
    //     $message = $e->getMessage();
    //     $code = $e->getCode();

    //     throw new Exception($message, $code);
    // }

    $res = $client->request('POST', "https://pro.rajaongkir.com/api/cost", [
        'headers' => [
            'key' => env('RO_KEY')
        ],
        'json' => [
            'origin' => $originId,
            'originType' => $originType,
            'destination' => $destinationId,
            'destinationType' => $destinationType,
            'weight' => $weight,
            'courier' => env('RO_SERVICES'),
        ],
        'timeout' => 15,
    ]);


    // $rajaOngkirResponse = json_decode($res->getBody()->getContents());
    $rajaOngkirResponse = json_decode($res->getBody());
    Log::info("Response Dari RO RO RO");
    Log::info(json_encode($rajaOngkirResponse));
    // dd($rajaOngkirResponse);
    // return $rajaOngkirResponse;
    $shippingCost = $rajaOngkirResponse->rajaongkir;
    $data['origin_details'] = $shippingCost;
    // $data['origin_details'] = $shippingCost->origin_details;
    $data['destination_details'] = $shippingCost->destination_details;
    if ($earlierMode == false) {
        $data['results'] = $shippingCost->results;
    } else {
        $dataEarlier = null;
        if (isset($shippingCost->results[0]->costs[1])) {
            $dataEarlier = $shippingCost->results[0]->costs[1];
        } else {
            $dataEarlier = $shippingCost->results[0]->costs[0];
        }

        $data['results_earlier'] = $dataEarlier;
    }
    // $shippingCost->results[0]->costs[0]->cost[0]->value;
    return $data;
    // return  $shippingCost->results;
}

function lypsisCheckShippingPrice($originId, $destinationId, $weight, $deliveryServices, $earlierMode = false)
{
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "https://pro.rajaongkir.com/api/cost");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
        'origin' => $originId,
        'originType' => 'subdistrict',
        'destination' => $destinationId,
        'destinationType' => 'city',
        'weight' => $weight,
        'courier' => $deliveryServices,
    ]));
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'key: ' . env('RO_KEY'),
        'Content-Type: application/json',
    ]);
    curl_setopt($curl, CURLOPT_TIMEOUT, 15);

    try {
        $res = curl_exec($curl);

        if ($res === false) {
            throw new Exception(curl_error($curl), curl_errno($curl));
        }

        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($httpCode >= 400) {
            // throw new Exception("Error getting shipping cost: HTTP $res");
            // $rajaOngkirResponse = json_decode($res);

            // return ResponseAPI("asdasdasd", 404);

            // return ResponseAPI($rajaOngkirResponse, 404);

            $rajaOngkirResponse = json_decode($res);
            $errorCode = $rajaOngkirResponse->rajaongkir->status->code;
            $errorDescription = $rajaOngkirResponse->rajaongkir->status->description;
            throw new Exception("Error getting shipping cost: $errorDescription", 404);
        }

        $rajaOngkirResponse = json_decode($res);
        $shippingCost = $rajaOngkirResponse->rajaongkir;

        // $data['origin_details'] = $shippingCost->origin_details;
        // $data['destination_details'] = $shippingCost->destination_details;

        $data = [];
        if ($earlierMode == false) {
            // $data['results'] = $shippingCost->results;
            $data = $shippingCost;
        } else {
            $dataEarlier = null;

            if (isset($shippingCost->results[0]->costs[1])) {
                $dataEarlier = $shippingCost->results[0]->costs[1];
            } else {
                $dataEarlier = $shippingCost->results[0]->costs[0];
            }

            $data['results_earlier'] = $dataEarlier;
        }

        return $data;
    } catch (\Exception $e) {
        throw $e;
    } finally {
        curl_close($curl);
    }
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
function parseDateIds($date, $format = 'j F Y')
{
    \Carbon\Carbon::setLocale('id_ID');

    return \Carbon\Carbon::parse($date)->translatedFormat($format);
}
function parseDateId($date, $format = 'j F Y, H:H')
{
    \Carbon\Carbon::setLocale('id_ID');

    return \Carbon\Carbon::parse($date)->translatedFormat($format);
}
function parseDates($date, $format = 'j M Y, H:H')
{
    \Carbon\Carbon::setLocale('id_ID');

    return \Carbon\Carbon::parse($date)->translatedFormat($format);
}
function parseDates2($date, $format = 'j M Y')
{
    \Carbon\Carbon::setLocale('id_ID');

    return \Carbon\Carbon::parse($date)->translatedFormat($format);
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

    $isPi = false;

    $user_agent = request()->header('User-Agent');

    if ($user_agent) {
        if (preg_match("/PiBrowser/i", $user_agent))
            $isPi = true;
    }
    if ($isPi)
        return convertRupiahToPi($price) . " π";

    if ($decimal == true) {
        return "Rp " . \number_format($price, 0, ',', '.');
    }
    return "Rp " . \number_format($price);
}

function convertRupiahToPi($price)
{
    $setting = Setting::where("name", "pi")->first();
    if (!$setting) {
        $setting = new Setting();
        $setting->name = "pi";
        $setting->value = "558647.95";
        $setting->save();
    }

    return (1 / (float) $setting->value) * ($price);
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
