<?php

namespace App\Http\Controllers\VendorAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    public $redirectTo = '/vendor/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('vendor.guest');
    }

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Http\Response
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('vendor.auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker('users');
    }

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('vendor');
    }
    // public function reset(Request $request)
    // {
    //     $request->validate($this->rules(), $this->validationErrorMessages());

    //     // Here we will attempt to reset the user's password. If it is successful we
    //     // will update the password on an actual user model and persist it to the
    //     // database. Otherwise we will parse the error and return the response.
    //     $response = $this->broker()->reset(
    //         $this->credentials($request), function ($user, $password) {
    //             $this->resetPassword($user, $password);
    //         }
    //     );

    //     // If the password was successfully reset, we will redirect the user back to
    //     // the application's home authenticated view. If there is an error we can
    //     // redirect them back to where they came from with their error message.
    //     return $response == Password::PASSWORD_RESET
    //                 ? $this->sendResetResponse($request, $response)
    //                 : $this->sendResetFailedResponse($request, $response);
    // }

}
