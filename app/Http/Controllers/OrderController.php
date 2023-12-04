<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Order;
use App\Models\StoreHouse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function createOrder(Request $request): \Illuminate\Http\JsonResponse
    {
      $iduser= auth()->user()->id;

      //  \auth()->()->getAuthIdentifier();
        //$fields=$request->all();
        //'users_Id'=$iduser;
        $order=Order::query()->create([
            'users_Id'=>$iduser,
            'hestoryOrder'=>now(),
            'store_houses_Id'=>1,
        ]);

       // $id=$order->id;
        foreach ($order as $or)
        {
            $or=Basket::create([
               'orders_Id'=>$order->id,
                'drugs_Id'=>$or['drugs_Id'],
                'drugQuan'=>$or['drugQuan'],
            ]);
        }
        return response()->json([
            'message'=>'success'
        ]);
    }
}
