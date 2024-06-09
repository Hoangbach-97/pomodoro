<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuoteController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'quotes' => 'string|max:100',
        ]);

        DB::table('users')->where('id', auth()->id())->update(['quotes'=> $request->quotes]);
        return redirect('/');
    }

    public function getQuotes(){
      return DB::table('users')->where('id', auth()->id())->value('quotes');
    }

    public function getUserQuotes(Request $request)
    {
        // Retrieve the authenticated user's ID
        $userId = $request->user()->id;

        // Retrieve the quotes value from the users table
        $quotes = DB::table('users')->where('id', $userId)->value('quotes');

        // Return the quotes in a JSON response
        return response()->json(['quotes' => $quotes]);
    }
}
