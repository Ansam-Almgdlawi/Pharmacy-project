<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Favorite;
use App\Models\Notification;
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
        $iduser = auth()->user()->id;

        $request->validate([
            'store_houses_Id' => 'required',
            'medicines' => 'required|array',
            'drugs.*.id' => 'required|exists:medicines,id',
            'drugs.*.quantity' => 'required|integer|min:1',
        ]);

        try {
            DB::transaction(function () use ($request, $iduser) {
                $order = Order::create([
                    'status_order' => 'receive',
                    'status_paid' => 'unpaid',
                    'users_Id' => $iduser,
                    'hestoryOrder' => now(),
                    'store_houses_Id' => $request['store_houses_Id'],
                ]);

                foreach ($request->input('medicines') as $medicine) {
                    $medicineId = $medicine['id'];
                    $requestedQuantity = $medicine['quantity'];

                    $availableQuantity = DB::table('drugs')
                        ->where('id', $medicineId)
                        ->where('store_houses_Id', $request['store_houses_Id'])
                        ->value('quantity');

                    if ($requestedQuantity > $availableQuantity) {
                        $medicineName = Drug::findOrFail($medicineId)->value('commercialName');
                        throw new \Exception("Requested quantity for $medicineName exceeds the available quantity.");
                    }

                    $basket = Basket::create([
                        'orders_Id' => $order->id,
                        'drugs_Id' => $medicineId,
                        'drugQuan' => $requestedQuantity,
                    ]);
                }

                $not = 'You have a new order!';
               // NotificationController::send($request['store_houses_Id'], 'New Order', $not);

                Notification::create([
                    'title' => 'New Order',
                    'body' => $not,
                    'users_Id' => $request['store_houses_Id'],
                    'store_house_Id' => $request['store_houses_Id'],
                ]);
            });

            return response()->json([
                'message' => 'The order has been received. Thank you for dealing with us.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 201);
        }
    }

    //تعديل حالة الطلبية
    public function updateOrderStatus(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $user = $order->users_Id;
        $store = $order->store_houses_Id;

        $data = request()->validate([
            'status_order' => 'required|in:sent,preparation',
            'status_paid' => 'required|in:paid,unpaid',
        ]);

        $previouss=$order->status_order;
        $order->status_order = $request->input('status_order');
        $order->status_paid = $request->input('status_paid');
        $order->save();

        if ($order->status_order == 'sent' && $previouss!='sent') {
            $baskets = Basket::where('orders_Id', $orderId)->get();

            foreach ($baskets as $basket) {
                $medicineId = $basket->drugs_Id;
                $requestedQuantity = $basket->drugQuan;

                $medicine = Drug::findOrFail($medicineId);
                $currentQuantity = $medicine->quantity;

                $newQuantity = $currentQuantity - $requestedQuantity;
                if ($newQuantity <= 0) {
                    $medicine->delete();
                } else {
                    $medicine->update([
                        'quantity' => $newQuantity,
                    ]);
                }
            }
        }

        $not = "The order status has become: $order->status_order & $order->status_paid";
        //NotificationController::send($user, 'Status Order', $not);

        $noti = Notification::create([
            'title' => 'Status Order',
            'body' => $not,
            'users_Id' => $user,
            'store_house_Id' =>1,
        ]);

        return response()->json([
            'message' => 'Order status updated successfully',
        ]);
    }
//عرض جميع الطلبيات
    public function getOrdersStore()
    {
        $storeId = auth()->user()->id;
        $orders = Order::with('basket')->where('store_houses_Id', $storeId)->get();

        return response()->json([
            'orders' => $orders,
        ]);
    }
//عرض الطلبيات الخاصة بالصيدلاني

    public function getOrdersPh()
    {
        $user = auth()->user()->id;
        $orders = Order::with('basket')->where('users_Id', $user)->get();

        return response()->json([
            'orders' => $orders,
        ]);
    }



    //reports Ph
    public function generateReports(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $userId = auth()->user()->id;
        $storeId = $request->input('store_houses_Id');

        $orders = Order::where('users_Id', $userId)
            ->where('store_houses_Id', $storeId)
            ->whereBetween('hestoryOrder', [$startDate, $endDate])
            ->get();

        return response()->json([
            'orders' => $orders,
        ]);
    }
    //reports store
    public function generateReportsStore(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $storeId = auth()->user()->id;
       // $storeId = $request->input('store_houses_Id');

        $orders = Order::where('store_houses_Id', $storeId)
            ->whereBetween('hestoryOrder', [$startDate, $endDate])
            ->get();

        return response()->json([
            'orders' => $orders,
        ]);
    }
}