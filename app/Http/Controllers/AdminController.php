<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AdminController extends Controller
{
    public function registeradmin(Request $request)
    {
        $input = $request->all();
        $user = User::where('email', $input['email'])->first();
        if ($request->password !== $request->repassword) {
            return redirect()->back()->withInput()->withErrors(['password' => 'Mật khẩu nhập lại không khớp']);
        }else if($user){
            return redirect()->back()->withInput()->withErrors(['email' => 'Email tài khoản đã tồn tại']);
        }else{
            $user = User::create([
                'email' => $input['email'],
                'phone' => $input['phone'],
                'name' => $input['name'],
                'password' => Hash::make($input['password']),
                'avatar' => '/images/avataradmin.png',
            ]);
            // // Đăng nhập người dùng mới đăng ký
            Auth::login($user);
            // Chuyển hướng sang trang Userpage, truyền thông tin người dùng qua biến user
            return redirect()->route('adminlogin.page');
            // return view('/Codesms', ['input' => $input, 'random_number' => $random_number]);
        }
    }

}