<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getNotificationsApi()
    {
        // جدول الاشعارات مع جدول المستخدم اعرض اخر 4 مش مقريات 
        $notifications=Notification::with(['user'])->orderBy('id', 'desc')->where('read_at',null)->take(4)->get();
        return response()->json($notifications, 200);
    }
}
