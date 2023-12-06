<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Drug;
use App\Models\Favorite;
use App\Models\Order;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function insert(Request $request)
    {
        $iduser= auth()->user()->id;
        $request->validate([
            'drugs_Id' =>'required',
        ]);
        $favorite=Favorite::query()->create([
            'drugs_Id'=>$request['drugs_Id'],
            'users_Id'=>$iduser,
            ]);
        return response()->json([
            'message'=>'The medicine added successfully',
        ]);
    }
    public function getfav(){
        $iduser= auth()->user()->id;
        $favorits[] = Favorite::where('users_Id',$iduser);


        foreach ($favorits as $favorit)
        {
            $idDrud=$favorit->value('drugs_Id');
           return $query[]=Drug::query()->where('id',$idDrud)->get();
        }

//        $query=Drug::query();
//        if($query->where('id',)->count())
//        {
//            $drugs=$query->get();
//            return response()->json(['Search Results'=>$drugs]);
//        }
//        return response()->json([
//            'favourits' => ,
//        ]);


    }
}
