<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $user = auth()->guard('web')->user();

        $notifications = Notification::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(4)->get();
        return NotificationResource::collection($notifications);
    }

    public function show($id)
    {
        $notification = Notification::where('id', $id)->first();
        if (!$notification)
            return responseAPI('Tidak ada data');
        return new NotificationResource($notification);
    }
}
