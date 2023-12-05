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
                ->value('quantity');

            if ($requestedQuantity > $availableQuantity)
            {
                $medicineName = Drug::findOrFail($medicineId)->value('commercialName');
                return "Requested quantity for $medicineName exceeds the available quantity.";
            }
            else{
            $basket = Basket::create([
                'orders_Id'=>$order->id,
                'drugs_Id'=>$medicine['id'],
                'drugQuan'=>$medicine['quantity'],

            ]);
        }}
        return response()->json([
            'message'=>'success',

        ]);

    }
}
