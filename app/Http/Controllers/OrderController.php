<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Drug;
use App\Models\DrugStoreHouse;
use App\Models\Order;
use App\Models\StoreHouse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    //إنشاء طلبية
    public function createOrder(Request $request)
    {
        $iduser= auth()->user()->id;
        $request->validate([
            'store_houses_Id' =>'required',

        ]);
        $order=Order::query()->create([
            'status_order'=>'recieve',
            'status_paid'=>'unpaid',
            'users_Id'=>$iduser,
            'hestoryOrder'=>now(),
            'store_houses_Id'=> $request['store_houses_Id'],
        ]);

        $request->validate([
            'medicines' => 'required|array',
            'drugs.*.id' => 'required|exists:medicines,id',
            'drugs.*.quantity' => 'required|integer|min:1',
        ]);
        $order->save();
        foreach ($request->input('medicines') as $medicine)
        {
            $medicineId = $medicine['id'];
            $requestedQuantity = $medicine['quantity'];

            $availableQuantity = DB::table('drugs')
                ->where('id', $medicineId)
                ->where('store_houses_Id', $request['store_houses_Id'])
                ->value('quantity');

            if ($requestedQuantity > $availableQuantity)
            {
                $medicineName = Drug::findOrFail($medicineId)->value('commercialName');
                return "Requested quantity for $medicineName exceeds the available quantity.";
            }
            else
            {
               // $medicine->save();
                $basket = Basket::create([
                'orders_Id'=>$order->id,
                'drugs_Id'=>$medicine['id'],
                'drugQuan'=>$medicine['quantity'],

              ]);
            }

        }
        return response()->json([
            'message'=>'The order has been received, thank you for dealing with us'
        ]);

    }
    //تعديل حالة الطلبية
    public function updateOrderStatus(Request $request, $orderId)
    {

        $order = Order::findOrFail($orderId);

        $data = request()->validate([
            'status_order' => 'required|in:sent,preparation',
            'status_paid' => 'required|in:paid,unpaid',
        ]);
        $order->status_order = $request->input('status_order');
        $order->status_paid = $request->input('status_paid');
        $order->save();

        if ( $order->status_order == 'sent')
        {
            $baskets = Basket::where('orders_Id',$orderId)->get();
            foreach ($baskets as $basket)
            {
                $medicineId = $basket->drugs_Id;
                $requestedQuantity = $basket->drugQuan;
                $medicine = Drug::findOrFail($medicineId);
                $medicinenew =$medicine ->value('quantity')- $requestedQuantity;
                     $medicine->update([
                     'quantity'=>$medicinenew,
                  ]);

            }

        }
        return response()->json([
            'message' => 'Order status updated successfully',
        ]);

    }
//عرض جميع الطلبيات
    public function getOrdersStore($storeId)
    {
        $orders = Order::where('store_houses_Id', $storeId)->get();

        return response()->json([
            'orders' => $orders,
        ]);
    }

//عرض الطلبيات الخاصة بالصيدلاني
    public function getOrdersPh($userId)
    {
        $orders = Order::where('users_Id', $userId)->get();

        return response()->json([
            'orders' => $orders,
        ]);


    }
}
