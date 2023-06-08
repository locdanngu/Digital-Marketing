<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dontuvan;



class DontuvanController extends Controller
{
    
    public function senddontuvan(Request $request)
    {
        $input = $request->all();
        $dontuvan = Dontuvan::create([
            'name' => $input['nameform'],
            'email' => $input['emailform'],
            'phone' => $input['phoneform'],
            'review' => $input['reviewform'],
        ]);
    }
    
    

}