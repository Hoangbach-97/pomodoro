<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiUserInfoController extends Controller
{
    public function getUserInfo(Request $request){
        $user = $request->user();
        if(!$user){
             return response()->json(['error' => 'User not found', 401]);
        }
        return response()->json($user);
    }
}
