<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Drug;
use App\Models\Favorit;
use App\Models\Order;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    //اضافة دواء الى المفضلة
    public function insert($id)
    {
        $iduser= auth()->user()->id;

        $dra=Drug::findOrFail($id);
        $dr=$dra->isfavorite;
        if(!$dr){
            $favorite=Favorit::query()->create([
                'drugs_Id'=>$id,
                'users_Id'=>$iduser,
            ]);
            $dra->update([
                'isfavorite'=>true]);
            return response()->json([
                'message'=>'The medicine added successfully',
            ]);
        }
        elseif($dr){
            $dra->update([
            'isfavorite'=>false]);
            $fav=Favorit::where('drugs_Id',$id)->delete();
            return response()->json([
                'message'=>'The medicine delete successfully',
            ]);
        }

    }
    //جلب قائمة المفضلة الخاصة بالصيدلاني
    public function getfav()
    {
        $iduser = auth()->user()->id;
        $favorites = Favorit::where('users_Id', $iduser)->get();

        $medicineData = [];
        foreach ($favorites as $favorite) {
            $medicine = Drug::findOrFail($favorite->drugs_Id);
            $medicineData[] = $medicine;
        }

        return response()->json([
            'data' => $medicineData,
            'status' => 1,
        ], 201);
    }
}