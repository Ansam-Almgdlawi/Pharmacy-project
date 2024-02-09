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
            'name'=>['required','unique:store_houses,name'],
            'email'=>['required','unique:store_houses,email'],
            'mobile'=>['required','digits:10','unique:store_houses,mobile'],
            'password'=>['required']
        ]);

        $user=StoreHouse::query()->create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
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
            'mobile' => ['digits:10','exists:store_houses,mobile'],
            'email'=>['required','exists:store_houses,email'],
            'password' => ['required'],

        ]);
        if(!Auth::guard('store_house')-> attempt($request->only(['email','password'])))
        {
            $message='Password is incorrect';
            return response()->json([
                'data'=>[],
                'status'=>0,
                'message'=>$message
            ],500);
        }

        $user = StoreHouse::query()->where('email', $request['email'])->first();
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
        $drug=Drug::all();
        $response=[
            'data'=> $drug,
        ];
        return response()->json([
            'drugs' =>$response ,
            'status'=>1,
        ],201);
    }
  
}
