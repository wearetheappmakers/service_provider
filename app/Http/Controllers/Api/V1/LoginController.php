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

    public function login(Request $request)
    {
        // dd('Hello');
        // echo \Config::get('jwt.user');
        // exit;
        // \Config::set('jwt.user', "App\Customer");
        \Config::set('jwt.user', "App\Models\Provider");
        \Config::set('auth.providers.users.model', \App\Models\Provider::class);
        // dd('hello');    

        if (is_numeric($request->username)) {
           $credentials = [
            'number' => $request->username,
            'password' => $request->password
        ];
    }else{
        $credentials = [
            'email' => $request->username,
            'password' => $request->password
        ]; 
    }
        // dd(JWTAuth::attempt($credentials));

    try {
        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['success' => 0, 'message' => 'These credentials do not match our records.'], 200);
        } 
        
        
    } catch (JWTAuthException $e) {
        return response()->json(['success' => 0, 'message' => 'failed_to_create_token'], 200);
    }

    return response()->json(['success' => 1, 'provider_detail' => JWTAuth::user(), 'token' => $token ]);
}

}