<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function getCommonData()
    {

        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $notifications = Notification::where('user_id', Auth::guard('web')->user()->id)->orderBy('created_at', 'desc')->take(4)->get();
            $data['notification'] = NotificationResource::collection($notifications);
            $data['notif_count'] = Notification::where('user_id', Auth::guard('web')->user()->id)->count();
        } else {
            $data['notification'] = null;
            $data['notif_count'] = 0;
        }

        return $data;
    }

    public function index()
    {
        $user = auth()->guard('web')->user();

        $notifications = Notification::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(4)->get();
        return NotificationResource::collection($notifications);
    }

    public function detailNotif($id)
    {
        $admin = Auth::guard('web')->user();

        if (!$admin)
            return redirect("/")->with('error', 'Tidak ada detail notifikasi');
        $notification = Notification::where('id', $id)->first();
        if (!$notification)
            return redirect("/pembeli/pesananku")->with('error', 'Tidak ada detail notifikasi')->with('auth', base64_encode($admin->uid));

        $notif = new NotificationResource($notification);
        $data = $this->getCommonData();
        $notif['date'] = parseDates($notif->created_at);

        return view('clients.dashboard.notification.detail', ['notif' => $notif, 'data' => $data]);
    }
}
