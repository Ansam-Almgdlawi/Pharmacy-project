<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Models\Drug;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function index($classificationId)
    {
        $classification = Classification::findOrFail($classificationId);
        $drugs= $classification->drugs;
        $response=[
            'data'=> $drugs,
        ];
         return response()->json([
            'store'=>$response,
            'status'=>1,
        ],201);
        
    }
}
