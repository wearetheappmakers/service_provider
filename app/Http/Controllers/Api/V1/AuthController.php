<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Customer;
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

class AuthController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        // dd($user->findOrfail(1));
    }

    public function register(Request $request)
    {
         if(!($request->number))
        {
            return response()->json(['success'=>0,'message'=>'number is required'],200);
        }

        $numbercheck = User::where('number',$request->number)->first();

        
        if(isset($numbercheck))
        {
            return response()->json(['success'=>0,'message'=>'number already in use.'],200);
        }

        try{

         $reg = $this->user->create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'number' => $request->get('number'),
            'b_date' => $request->get('b_date'),
            'gender' => $request->get('gender'),
            'spassword' => $request->get('password'),
            'password' => bcrypt($request->get('password')),
            'status' => 1
        ]); 


     } catch (\Illuminate\Database\QueryException $e) 
     {
         $errorCode = $e->errorInfo[1];
         if($errorCode == '1062'){
            return response()->json(['success' => 0, 'message' => 'Duplicate Entry Exception!. User Already Registered'], 200);
        }
    }

    $data=['email'=>$request->get('email')];
        // Mail::send('mail.mail', $data, function($message) use($data) {
        //     $message->to($data['email']);
        //     $message->subject('Welcome to AB Mart');
        // });
    if($reg){
        \Config::set('jwt.user', "App\User");
        \Config::set('auth.providers.users.model', \App\User::class);

        $credentials = $request->only('number', 'password');

        try 
        {
            if (!$token = JWTAuth::attempt($credentials)) 
            {
                return response()->json(['success' => 0, 'message' => 'These credentials do not match our records.'], 200);
            }                 
        } catch (JWTAuthException $e) 
        {
            return response()->json(['success' => 0, 'message' => 'failed_to_create_token'], 200);
        } 
        return response()->json(['success' => 1, 'token' => $token, 'users' => $reg]);
    }else{
        return response()->json(['success' => 0, 'message' => 'email already exists'], 200);
    }
}

public function login(Request $request)
{
    if(!($request->username))
        {
            return response()->json(['success'=>0,'message'=>'username is required'],200);
        }
       

        $check = User::where('number',$request->get('username'))->first();
        if(!(isset($check)))
        {
            $user = new User();
            $user->number = $request->username;

            $user->otp = rand(100000,999999);
            $user->otp_verify = 0;
            $user->country_id = $request->country_id;
            $user->device_id = $request->device_id;
            $user->push_token = $request->push_token;
            $user->spassword = 'Applified@2021';
            $user->password = bcrypt('Applified@2021');
            $user->save();
            return response()->json(['success' => 1, 'id' => $user->id, 'otp' => $user->otp,'user'=>$user,'username'=>$request->username ]);
           
        }
        
       
     if (is_numeric($request->username)) {
            $user=User::where('number',$request->username)->first();
            $user->otp = rand(100000,999999);
            $user->otp_verify = 0;
            $user->country_id = $request->country_id;
            $user->device_id = $request->device_id;
            $user->push_token = $request->push_token;
            $user->spassword = 'Applified@2021';
            $user->password = bcrypt('Applified@2021');
            $user->save();
            return response()->json(['success' => 1, 'id' => $user->id, 'otp' => $user->otp,'user'=>$user,'username'=>$request->username ]);


        }else{
          

           $user=User::where('email',$request->username)->value('spassword');

           $user->otp = rand(100000,999999);
           $user->otp_verify = 0;
           $user->country_id = $request->country_id;
           $user->device_id = $request->device_id;
           $user->push_token = $request->push_token;
           $user->save();
           return response()->json(['success' => 1, 'id' => $user->id, 'otp' => $user->otp,'user'=>$user,'username'=>$request->username ]);

       }
}
 
public function otpVerify(Request $request){
    \Config::set('jwt.user', "App\User");
    \Config::set('auth.providers.users.model', \App\User::class);

     if (is_numeric($request->username)) {
        $user=User::where('number',$request->username)->first();
        if($user->otp == $request->otp){
            $credentials = [
                'number' => $request->username,
                'password'=>$user->spassword
            ];    
        }else{
            return response()->json(['success' => 0, 'message' => 'otp is wrong! please try again!']);
        }   
    }else{
        $user=User::where('number',$request->username)->first();

        if($user->otp == $request->otp){
            $credentials = [
                'email' => $request->username,
                'password'=>$user->spassword
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

    $cuser=JWTAuth::user();

    $cuser->otp = '';
    $cuser->otp_verify = 1;
    $cuser->save();

    return response()->json(['success' => 1,  'id' => $cuser->id, 'user'=>$cuser ,'token' => $token, ]);

}
public function changepassword(Request $request){

    $this->validate($request, [
        'password' => 'required|confirmed|min:6',
        'password_confirmation' => 'required|min:6|same:password',
    ]);

    $user = JWTAuth::user();

    if (Hash::check($request->oldpassword, $user->password)) { 
        $user->password = Hash::make($request->password);
        $user->spassword = $request->password;
        $user->save();
        return response()->json(['success' => 1,'message'=>'password changed successfully']);
    }else{
        return response()->json(['success' => 0,'message'=>'old password not match']);
    }
}

public function update_user(Request $request)
{
    $param = $request->all();

    $validation = Validator::make($request->all(), [
        'name' => 'required',
        'number' => 'required|numeric',
    ]);

    if($validation->fails()){
        $errors = $validation->errors();
        return response()->json(['status' => false, 'message' => $errors], 200);
    }

    if ($request->hasFile('image')) {
        $name = ImageHelper::saveUploadedImage(request()->image, 'users', storage_path("app/public/uploads/users/"));
        $param['image']= $name;
    }

    $update= User::findOrfail(JWTAuth::user()->id);
    $update->fname = $param['name'];
    $update->number = $param['number'];
    $update->image = !empty($param['image']) ? $param['image'] : $update->image;
    $update->save();
    $update->image = !empty($update->image) ? url('/storage/uploads/users/Medium').'/'.$update->image : '';

    return response()->json(['status' => true, 'message' => 'User was successfully updated.', 'data' => $update ], 200);
}

public function getUser(Request $request){

    $user = User::findOrfail(JWTAuth::user()->id);
    $user->image = !empty($user->image) ? url('/storage/uploads/users/Medium').'/'.$user->image : '';

    if ($user) {
     return response()->json(['status' => 1, 'message' => 'User details fetched successfully updated.', 'data' => $user ], 200); 
 }else{
  return response()->json(['status' => 0, 'message' => 'No data found!', 'data' => '' ], 200);  
}  
}

public function updateProfileDetail(Request $request){
    $param = $request->all();
    $user = User::where('id',JWTAuth::user()->id)->update($param);

    if ($user) {
     return response()->json(['status' => 1, 'message' => 'User details Updated successfully updated.', 'data' =>  User::findOrfail(JWTAuth::user()->id) ], 200); 
 }else{
  return response()->json(['status' => 0, 'message' => 'No data found!', 'data' => '' ], 200);  
}
}

}
