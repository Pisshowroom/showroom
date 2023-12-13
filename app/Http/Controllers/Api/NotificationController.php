<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $user = auth()->guard('api-client')->user();

        $notifications = Notification::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(20);
        return NotificationResource::collection($notifications);
    }
    
    public function show($id)
    {
        $notification = Notification::findOrFail($id);
        return new NotificationResource($notification);
    }
}