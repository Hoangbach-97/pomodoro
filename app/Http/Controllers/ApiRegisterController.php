<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;


class ApiRegisterController extends Controller
{
    use RegistersUsers;

    // Customize where to redirect users after registration if necessary
    // protected $redirectTo = '/home';

    // Other methods and logic for API registration
    public function register(Request $request)
{
    // $this->validator($request->all())->validate();

    $check = DB::select('select * from users where email = :email', ['email' => $request->input('email')]);
    // return response()->json(count($check));
    if (count($check) > 0){
        return response()->json(['user' => $request->input('email'). " already exist"], 402);

    } else{
        $user = $this->create($request->all());

        $this->guard()->login($user);
    
        return $this->registered($request, $user)
                        ?: response()->json([
                            'user' => $user,
                            'token' => $user->createToken('Pomodoro')->plainTextToken, // For Sanctum
                        ]);
                    }
}

protected function registered(Request $request, $user)
{
    // Customize post-registration logic if needed
}

protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
}

protected function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);
}
}
