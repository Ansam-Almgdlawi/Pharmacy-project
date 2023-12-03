<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\StoreHouse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreHouseController extends Controller
{
    public function register(Request $request)
    {
        $fields=$request->validate([
            'name'=>['required'],
            'mobile'=>['required','digits:10','unique:store_houses,mobile'],
            'password'=>['required']
        ]);

        $user=StoreHouse::query()->create([
           'name'=>$fields['name'],
            'mobile'=>$fields['mobile'],
            'password'=>bcrypt($fields['password']),
        ]);
        $token=$user->createToken("APT TOKEN")->plainTextToken;
        $message='Sucsessfully Registered';
        $response=[
            'user'=> $user,
            'token'=>$token
        ];
        return response()->json([
            'data'=>[$response],
            'status'=>1,
            'message'=>$message
        ],201);
    }

    public function login(Request $request){
        $request->validate([
            'mobile' => ['required','digits:10'],
            'password' => ['required'],

        ]);
//        if(!Auth::attempt($request->only(['mobile','password'])))
//        {
//            $message='Mobile or Password dose not match with our recored';
//            return response()->json([
//                'data'=>[],
//                'status'=>0,
//                'message'=>$message
//            ],500);
//        }

        $user = StoreHouse::query()->where('mobile', $request['mobile'])->first();
        $token=$user->createToken("API TOKEN")->plainTextToken;
        $message='You logged in sucsessfully';
        $response=[
            'user'=> $user,
            'token'=>$token
        ];
        return response()->json([
            'data'=>[$response],
            'status'=>1,
            'message'=>$message
        ],201);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return[
            'message'=>'logged out'
        ];
    }
    public function getDrug()
    {
        $drug[]=Drug::all();
        return $drug;
    }
}
