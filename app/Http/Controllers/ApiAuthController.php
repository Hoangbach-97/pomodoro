<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ApiAuthController extends Controller
{
    //
    use AuthenticatesUsers;


    public function login(Request $request)
{
    $this->validateLogin($request);

    // If the class is using the ThrottlesLogins trait, we can automatically throttle
    if (method_exists($this, 'hasTooManyLoginAttempts') &&
        $this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);

        return $this->sendLockoutResponse($request);
    }

    if ($this->attemptLogin($request)) {
        return $this->sendLoginResponse($request);
    }

    // If the login attempt was unsuccessful we will increment the number of attempts
    // to login and redirect the user back to the login form. Of course, when this
    // user surpasses their maximum number of attempts they will get locked out.
    $this->incrementLoginAttempts($request);

    return $this->sendFailedLoginResponse($request);
}


public function logout(Request $request){

    // $token =  $request->user()->token();
    $check = $request->user()->currentAccessToken()->delete();
    //  $token->revoke();
    if ($check) {
        return response()->json(['mess' => "Successfully loged out"]);
    } else{
        return response()->json(['mess' => "Already loged out"]);
    }
}


    protected function sendLoginResponse(Request $request)
{
    // $request->session()->regenerate();

    $this->clearLoginAttempts($request);

    // Return a JSON response for successful login
    return response()->json([
        'user' => Auth::user(),
        'token' => Auth::user()->createToken('Pomodoro')->plainTextToken, //For Sanctum
    ]);
}

protected function sendFailedLoginResponse(Request $request)
{
    return response()->json([
        'error' => trans('auth.failed'),
    ], 422);
}
}
