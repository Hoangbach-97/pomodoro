<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApiQuoteController extends Controller
{
  
    // Get id from request
    public function storeByRequest(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'quotes' => 'string|max:100',
        ]);

        $userId = $request->input('id'); // Get the user ID from the request

       $check =  DB::table('users')->where('id', $userId)->update(['quotes' => $request->quotes]);
        if($check) {
            return response()->json(["mess" => "Updating success $check"], 200);
        } else {
            return response()->json(["mess" => "Error updating $check"], 404);
        }
    }

    // Get id from url
   
}
