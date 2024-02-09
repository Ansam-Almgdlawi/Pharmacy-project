<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Drug;
use App\Models\Token;
use App\Models\Notification;
use Illuminate\Http\JsonResponse;

class NotificationController extends Controller
{
    
    public function getNotification()
    {
        $id= auth()->user()->id;
        $noti = Notification::Where('users_Id', $id)->get();
        return response()->json([
            'Notification' =>$noti ,
        ]);
    }
    public function getNotificationStore()
    {
        $id= auth()->user()->id;
        $noti = Notification::Where('store_house_Id', $id)->get();
        return response()->json([
            'Notification' =>$noti ,
        ]);
    }
}

