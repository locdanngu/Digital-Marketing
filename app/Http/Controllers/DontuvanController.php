<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class DontuvanController extends Controller
{
    
    public function senddontuvan(Request $request)
    {
        $input = $request->all();
        
        $html ='';
        return response()->json(['html' => $html]);
    }
    
    

}