<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dontuvan;
use App\Models\Emailthongbao;


class DontuvanController extends Controller
{
    
    public function senddontuvan(Request $request)
    {
        $input = $request->all();
        // dd(nl2br($input['reviewform']));
        $dontuvan = Dontuvan::create([
            'name' => $input['nameform'],
            'email' => $input['emailform'],
            'phone' => $input['phoneform'],
            'review' => $input['reviewform'],
            'status' => 0,
            'request' => '',
        ]);
    }
    
    
    public function sendemailnhanthongbao(Request $request)
    {
        $input = $request->all();
        $kiemtra = Emailthongbao::where('email', $input['emailnhanthongbao'])->first();
        
        if ($kiemtra) {
            return error();    
        }else{
            $emailthongbao = Emailthongbao::create([
                'email' => $input['emailnhanthongbao'],
            ]);
        }
        
    }
    

}