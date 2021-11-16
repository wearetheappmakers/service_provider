<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use JWTAuth;
use Illuminate\Support\Facades\Validator;
use DB;
use JWTAuthException;
use Illuminate\Support\Facades\Storage;
use Mail;
use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
	private $user;


    public function __construct(Provider $provider)
    {
        $this->user = $provider;


        // dd($user->findOrfail(1));
    }


    public function login(Request $request){
        if(!($request->username))
        {
            return response()->json(['success'=>0,'message'=>'username is required'],200);
        }
       

        $check = Provider::where('number',$request->get('username'))->first();
        if(!(isset($check)))
        {
            return response()->json(['success' => 0, 'message' => 'No number found.'], 200);
        }

        if (is_numeric($request->username)) {
            $user=Provider::where('number',$request->username)->first();
            $user->otp = rand(100000,999999);
            $user->otp_verifyy = 0;
            $user->country_id = $request->country_id;
            $user->save();
            return response()->json(['success' => 1, 'id' => $user->id, 'otp' => $user->otp,'provider_user'=>$user,'username'=>$request->username ]);


        }else{

           $user=Provider::where('email',$request->username)->value('spassword');

           $user->otp = rand(100000,999999);
           $user->otp_verifyy = 0;
           $user->country_id = $request->country_id;
           $user->save();
           return response()->json(['success' => 1, 'id' => $user->id, 'otp' => $user->otp,'provider_user'=>$user,'username'=>$request->username ]);

       }

   }

   public function providerotpVerify(Request $request, Provider $provider){

    \Config::set('jwt.user', "App\Provider");
    \Config::set('auth.providers', ['users' => [
        'driver' => 'eloquent',
        'model' => \App\Provider::class,
    ]]);

    if (is_numeric($request->username)) {
        $provider=Provider::where('number',$request->username)->first();
        if($provider->otp == $request->otp){
            $credentials = [
                'number' => $request->username,
                'password'=>$provider->spassword
            ];    
        }else{
            return response()->json(['success' => 0, 'message' => 'otp is wrong! please try again!']);
        }   
    }else{
        $provider=Provider::where('number',$request->username)->first();

        if($provider->otp == $request->otp){
            $credentials = [
                'email' => $request->username,
                'password'=>$provider->spassword
            ];    
        }else{
            return response()->json(['success' => 0, 'message' => 'otp is wrong! please try again!']);
        }  
    }

    try {
        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['success' => 0, 'message' => 'These credentials do not match our records.'], 200);
        } 


    } catch (JWTAuthException $e) {
        return response()->json(['success' => 0, 'message' => 'failed_to_create_token'], 200);
    }

    $nuser = JWTAuth::user();

    $nuser->otp = '';
    $nuser->otp_verifyy = 1;
    $nuser->save();

    return response()->json(['success' => 1,  'id' => $nuser->id,'provider_user'=>$nuser ,'token' => $token, ]);

}

}