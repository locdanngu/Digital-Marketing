<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AdminController extends Controller
{
    public function adminhomepage(Request $request)
    {
        $user = Auth::user();
        return view('Adminhomepage', ['user' => $user]);
    }

    public function registerformadmin(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('adminhome.page');
        }else{
            return view('Registeradmin');
        }
    }

    public function loginformadmin(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('adminhome.page');
        }else{
            return view('Loginadmin');
        }
    }


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


    public function loginadmin(Request $request)
    {
        // Kiểm tra tính hợp lệ của đầu vào
        $this->validate($request, ['email' => 'required|email',
                                'password' => 'required|min:6']);

        // Lấy thông tin đăng nhập từ đầu vào
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Nếu đăng nhập thành công, kiểm tra vai trò của người dùng
            $user = Auth::user();
            // Chuyển hướng đến trang người dùng
            return redirect()->route('adminhome.page');
        } else {
            // Nếu đăng nhập không thành công, chuyển hướng đến trang đăng nhập và hiển thị thông báo lỗi
            return redirect()->back()->withErrors(['email' => 'Sai email hoặc mật khẩu']);
        }
    }

    public function logoutadmin(Request $request)
    {
        Auth::logout();
        return redirect()->route('adminlogin.page');
    }

}