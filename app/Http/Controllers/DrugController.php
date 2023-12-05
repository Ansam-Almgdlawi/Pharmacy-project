<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\StoreHouse;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DrugController extends Controller
{
    public function addDrug(Request $request): JsonResponse
    {
        $data = request()->validate([
            'scientificName' => 'required|string',
            'commercialName' => 'required|string',
            'quantity' => 'required|min:1',
            'expirationDate' => 'required',
            'price' => 'required',
            'classifications_Id' => 'required',
           // 'store_houses_Id'=>'required'
        ]);
       $id= auth()->user()->id;
        $drug=Drug::query()->create([
            'scientificName'=>$data['scientificName'],
            'commercialName'=>$data['commercialName'],
            'quantity'=>$data['quantity'],
            'expirationDate'=>$data['expirationDate'],
            'price'=>$data['price'],
            'classifications_Id'=>$data['classifications_Id'],
            'store_houses_Id'=>$id,
        ]);
        // Create a new medicine instance
       // $drug->drug_store_house()->attach($drug);
        $message='The medicine was added successfully';
        return response()->json([
            'data'=>[$data],
            'status'=>1,
            'message'=>$message
        ],201);
    }

//    public function storeDrug(StoreHouse $storeHouse): \Illuminate\Database\Eloquent\Relations\BelongsToMany
//    {
//        $drugs =
//        return $drugs;
//    }

//    public function pharmacistMedicines(User $pharmacist, StoreHouse $storeHouse): \Illuminate\Database\Eloquent\Relations\BelongsToMany
//    {
//        $drugs = $storeHouse->drugs();
//
//        // Return the view with medicines specific to the pharmacist's chosen warehouse
//        return $drugs;
//    }

public function search($commercialName): JsonResponse
{
        $query=Drug::query();
        if($query->where('commercialName','LIKE','%'.$commercialName.'%')->count())
        {
            $drugs=$query->get();
            return response()->json(['Search Results'=>$drugs]);
        }
        else
        {
            return response()->json(['message'=>'Not Found']);
        }

}
    public function getOneDrug($id)
    {
        $drug=Drug::where('id',$id)->first();
        return $drug;
    }
}

