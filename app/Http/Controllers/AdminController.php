<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dontuvan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AdminController extends Controller
{

    public function adminhomepage(Request $request)
    {
        $user = Auth::user();
        return view('admin/Adminhomepage', ['user' => $user]);
    }

    public function registerformadmin(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('adminhome.page');
        }else{
            return view('admin/Registeradmin');
        }
    }

    public function loginformadmin(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('adminhome.page');
        }else{
            return view('admin/Loginadmin');
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

    public function dondangky(Request $request){
        $user = Auth::user();
        $dontuvan = Dontuvan::where('status', 0)->orderBy('created_at', 'asc')->get();
        $countdontuvan = Dontuvan::where('status', 0)->count();
        return view('admin/NewContact', ['user' => $user, 'dontuvan' => $dontuvan, 'countdontuvan' => $countdontuvan]);
    }

    public function traloidondangky(Request $request){
        $dontuvan = Dontuvan::find($request['id']);
        $dontuvan->request = $request['traloi'];
        $dontuvan->status = 1;
        $dontuvan->save();
        return redirect()->route('newcontact.page');
    }

    public function timkiemdondangky(Request $request){
        $search = $request->input('search');
        if(!$search || !is_string($search)){
            // Nếu không có giá trị search hoặc không phải chuỗi thì trả về tất cả bản ghi
            $dontuvan = Dontuvan::where('status', 0)->orderBy('created_at', 'asc')->get();
        } else {
            // Nếu có giá trị search và là chuỗi thì truy vấn với điều kiện
            $dontuvan = Dontuvan::where('status', 0)
                ->where(function($query) use ($search) {
                    $query->where('phone', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
                })
                ->orderBy('created_at', 'asc')
                ->get();
        }

        $html = '';
        foreach ($dontuvan as $dtv) {
            $html .= '<tr>';
            $html .= '<td>' . $dtv->idtuvan . '</td>';
            $html .= '<td>' . $dtv->name . '</td>';
            $html .= '<td>' . $dtv->email . '</td>';
            $html .= '<td><span class="tag tag-success">' . $dtv->phone . '</span></td>';
            $html .= '<td>' . $dtv->review . '</td>';
            $html .= '<td>' . $dtv->created_at . '</td>';
            $html .= '<td class="project-actions text-right">';
            $html .= '<button class="btn btn-primary btn-sm" type="button" data-toggle="modal"';
            $html .= ' data-target="#modal-traloi-dtv" data-id="' . $dtv->idtuvan . '"';
            $html .= ' data-name="' . $dtv->name . '" data-email="' . $dtv->email . '"';
            $html .= ' data-phone="' . $dtv->phone . '" data-review="' . $dtv->review . '"';
            $html .= ' data-time="' . $dtv->created_at . '">';
            $html .= '<i class="bi bi-chat-right-dots-fill"></i> Trả lời</button>';
            $html .= '</td>';
            $html .= '</tr>';
        }
        return response()->json(['html' => $html]);
    }

    public function dontraloi(Request $request){
        $user = Auth::user();

        return view('admin/OldContact', ['user' => $user]);
    }

    public function thongkedon(Request $request){
        $user = Auth::user();

        return view('admin/ListContact', ['user' => $user]);
    }

}