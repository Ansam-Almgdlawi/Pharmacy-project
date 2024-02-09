<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Order;
use App\Models\StoreHouse;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DrugController extends Controller
{
    //إضافة دواء
    public function addDrug(Request $request): JsonResponse
    {
        $data = request()->validate([
            'scientificName' => 'required|string',
            'commercialName' => 'required|string',
            'manufacturer'=>'required|string',
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
            'manufacturer'=>$data['manufacturer'],
            'quantity'=>$data['quantity'],
            'expirationDate'=>$data['expirationDate'],
            'price'=>$data['price'],
            'classifications_Id'=>$data['classifications_Id'],
            'store_houses_Id'=>$id,
        ]);
       // $drug->drug_store_house()->attach($drug);
        $message='The medicine was added successfully';
        return response()->json([
            'data'=>[$data],
            'status'=>1,
            'message'=>$message
        ],201);
    }
//عرض الأدوية الخاصة بمستودع معين
    public function storeDrug($storeId)
    {
        $drugs = Drug::where('store_houses_Id', $storeId)->get();
        $response=[
            'data'=> $drugs,
        ];
        return response()->json([
            'drugs' =>$response ,
            'status'=>1,
        ],201);
    }
  
 //البحث عن دواء
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
//عرض تفاصيل دواء معين
    public function getOneDrug($id)
    {
        $drug=Drug::where('id',$id)->first();
        return $drug;
    }
}

