<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Models\Drug;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\StoreHouse;
class AuthUserController extends Controller
{
    //register
    public function register(Request $request){
        $fields=$request->validate([
            'email'=>['required','unique:users,email'],
            'mobile'=>['required','digits:10','unique:users,mobile'],
            'password'=>['required']
        ]);

        $user=User::query()->create([
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
    //login
    public function login(Request $request){
        $request->validate([
            'mobile' => ['digits:10','exists:users,mobile'],
            'password' => ['required'],
            'email' => ['required','exists:users,email'],

        ]);
        if(!Auth::guard('user')->attempt($request->only(['email','password'])))
        {
            $message='Password is incorrect';
            return response()->json([
                'data'=>[],
                'status'=>0,
                'message'=>$message
            ],500);
        }

        $user = User::query()->where('email', $request['email'])->first();
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
    //logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return[
            'message'=>'logged out'
        ];
    }

    public function getClass()
    {
        $drug=Classification::all();
        $response=[
            'data'=> $drug,
        ];
         return response()->json([
            'browses'=>$response,
            'status'=>1,
        ],201);
    }
    public function getStoreHouse()
    {
        $drug=StoreHouse::all();
        $response=[
            'data'=> $drug,
        ];
         return response()->json([
            'store'=>$response,
            'status'=>1,
        ],201);
    }
}
