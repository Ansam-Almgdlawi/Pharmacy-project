<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Models\Drug;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    //register
    public function register(Request $request){
        $fields=$request->validate([
            'firstName'=>['required'],
            'lastName'=>['required'],
            'mobile'=>['required','digits:10','unique:users,mobile'],
            'password'=>['required']
        ]);

        $user=User::query()->create([
            'firstName'=>$fields['firstName'],
            'lastName'=>$fields['lastName'],
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
            'mobile' => ['required','digits:10','exists:users,mobile'],
            'password' => ['required'],

        ]);
        if(!Auth::attempt($request->only(['mobile','password'])))
        {
            $message='Password is incorrect';
            return response()->json([
                'data'=>[],
                'status'=>0,
                'message'=>$message
            ],500);
        }

        $user = User::query()->where('mobile', $request['mobile'])->first();
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
        $drug[]=Classification::all();
        return $drug;
    }
}
