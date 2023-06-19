<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dontuvan;
use App\Models\Emailthongbao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Mail;
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
        // $email = $request['email'];
        $requestmessage =  $request['traloi'];
        $time = $request['time'];
        $name = $request['name'];
        Mail::send('Traloituvan', compact('name','time','requestmessage'), function($email) use($request, $name, $time,$requestmessage){
            $email->subject('Trả lời yêu cầu tư vấn', $name,$time,$requestmessage);
            $email->to($request->email);    
        });
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
        $countdontuvan =  $dontuvan->count();
        $html = '';
        foreach ($dontuvan as $dtv) {
            $html .= '<tr>';
            $html .= '<td>' . $dtv->idtuvan . '</td>';
            $html .= '<td>' . $dtv->name . '</td>';
            $html .= '<td>' . $dtv->email . '</td>';
            $html .= '<td><span class="tag tag-success">' . $dtv->phone . '</span></td>';
            $html .= '<td>' . nl2br($dtv->review) . '</td>';
            $html .= '<td>' . $dtv->created_at . '</td>';
            $html .= '<td class="project-actions text-right">';
            $html .= '<button class="btn btn-primary btn-sm" type="button" data-toggle="modal"';
            $html .= ' data-target="#modal-traloi-dtv" data-id="' . $dtv->idtuvan . '"';
            $html .= ' data-name="' . $dtv->name . '" data-email="' . $dtv->email . '"';
            $html .= ' data-phone="' . $dtv->phone . '" data-review="' . nl2br($dtv->review) . '"';
            $html .= ' data-time="' . $dtv->created_at . '">';
            $html .= '<i class="bi bi-chat-right-dots-fill"></i> Trả lời</button>';
            $html .= '</td>';
            $html .= '</tr>';
        }
        return response()->json([
            'html' => $html,
            'count' => $countdontuvan
        ]);
        
    }

    public function dontraloi(Request $request){
        $user = Auth::user();
        $dontuvan = Dontuvan::where('status', 1)->orderBy('created_at', 'asc')->get();
        $countdontuvan = Dontuvan::where('status', 1)->count();
        return view('admin/OldContact', ['user' => $user, 'dontuvan' => $dontuvan, 'countdontuvan' => $countdontuvan]);
    }

    public function timkiemdontraloi(Request $request){
        $search = $request->input('search');
        if(!$search || !is_string($search)){
            // Nếu không có giá trị search hoặc không phải chuỗi thì trả về tất cả bản ghi
            $dontuvan = Dontuvan::where('status', 1)->orderBy('created_at', 'asc')->get();
        } else {
            // Nếu có giá trị search và là chuỗi thì truy vấn với điều kiện
            $dontuvan = Dontuvan::where('status', 1)
                ->where(function($query) use ($search) {
                    $query->where('phone', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
                })
                ->orderBy('created_at', 'asc')
                ->get();
        }
        $countdontuvan = $dontuvan->count();

        $html = '';
        foreach ($dontuvan as $dtv) {
            $html .= '<tr>';
            $html .= '<td>' . $dtv->idtuvan . '</td>';
            $html .= '<td>' . $dtv->name . '</td>';
            $html .= '<td>' . $dtv->email . '</td>';
            $html .= '<td><span class="tag tag-success">' . $dtv->phone . '</span></td>';
            $html .= '<td>' . nl2br($dtv->review) . '</td>';
            $html .= '<td>' . $dtv->created_at . '</td>';
            $html .= '<td>' . $dtv->request . '</td>';
            $html .= '<td>' . $dtv->updated_at . '</td>';
            $html .= '<td class="project-actions text-right">';
            $html .= '<button class="btn btn-info btn-sm" type="button" data-toggle="modal"';
            $html .= ' data-target="#modal-info-dtv" data-id="' . $dtv->idtuvan . '"';
            $html .= ' data-name="' . $dtv->name . '" data-email="' . $dtv->email . '"';
            $html .= ' data-phone="' . $dtv->phone . '" data-review="' . nl2br($dtv->review) . '"';
            $html .= ' data-time="' . $dtv->created_at . '" data-request="' . $dtv->request . '"';
            $html .= ' data-timerequest="' . $dtv->updated_at . '">';
            $html .= '<i class="bi bi-info"></i> Xem Chi Tiết</button>';
            $html .= '</td>';
            $html .= '</tr>';
        }
        return response()->json([
            'html' => $html,
            'count' => $countdontuvan
        ]);
    }

    public function thongkedon(Request $request){
        $user = Auth::user();
        $countdontuvan = Dontuvan::all()->count();
        $donTuvanByMonth = Dontuvan::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        // Mảng chứa số lượng đơn của từng tháng
        $donTuvanCounts = array_fill(1, 12, 0);
        foreach ($donTuvanByMonth as $item) {
            $month = $item->month;
            $count = $item->count;
            $donTuvanCounts[$month] = $count;
        }
        $donTuvanCounts = json_encode(array_values($donTuvanCounts));
        return view('admin/ListContact', ['user' => $user,'countdontuvan' => $countdontuvan, 'donTuvanCounts' => $donTuvanCounts]);
    }


    public function danhsachemail(Request $request){
        $user = Auth::user();
        $emailthongbao = Emailthongbao::all();
        $coutnemailthongbao = Emailthongbao::all()->count();
        return view('admin/Notification', ['user' => $user, 'emailthongbao' => $emailthongbao , 'countemailthongbao' => $coutnemailthongbao]);
    }

    public function xoaemail(Request $request){
        $user = Auth::user();
        $emailthongbao = Emailthongbao::where('idemailthongbao', $request['id'])->delete();
        return redirect()->back();
    }

    public function timkiememail(Request $request){
        $search = $request->input('search');
        if(!$search || !is_string($search)){
            // Nếu không có giá trị search hoặc không phải chuỗi thì trả về tất cả bản ghi
            $emailthongbao = Emailthongbao::all();
        } else {
            // Nếu có giá trị search và là chuỗi thì truy vấn với điều kiện
            $emailthongbao = Emailthongbao::where('email', 'like', '%' . $search . '%')->orderBy('created_at', 'asc')->get();
        }
        $countemail = $emailthongbao->count();
        $html = '';
        foreach ($emailthongbao as $noti) {
            $html .= "<tr>
                <td>{$noti->email}</td>
                <td>{$noti->created_at}</td>
                <td class='project-actions text-right'>
                    <button class='btn btn-danger btn-sm' type='button' data-toggle='modal' data-target='#modal-delete-emailnoti' data-id='{$noti->idemailthongbao}' data-time='{$noti->created_at}' data-email='{$noti->email}'>
                        <i class='bi bi-trash'></i>
                        Xóa
                    </button>
                </td>
            </tr>";
        }
        return response()->json([
            'html' => $html,
            'count' => $countemail
        ]);
        
    }
}