<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dontuvan;
use App\Models\Emailthongbao;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Daura;
use App\Models\Serviceads;
use App\Models\Servicechange;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Hash;
use Mail;
class AdminController extends Controller
{

    public function adminhomepage(Request $request)
    {
        $user = Auth::user();
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $dauvao2 = Serviceads::sum('cost');
        $dauvaoByMonth = Serviceads::selectRaw('MONTH(created_at) as month, SUM(cost) as total_cost')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->get();
        $dauvaoTotals2 = array_fill(1, 12, 0);
        foreach ($dauvaoByMonth as $item) {
            $month = $item->month;
            $totalCost = $item->total_cost;
            $dauvaoTotals2[$month] = $totalCost;
        }

        $daura = Daura::sum('totalcost');
        $dauvao = $dauvao2 - $daura;
        $dauraByMonth = Daura::selectRaw('MONTH(created_at) as month, SUM(totalcost) as total_cost')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->get();
        $dauraTotals = array_fill(1, 12, 0);
        foreach ($dauraByMonth as $item) {
            $month = $item->month;
            $totalCost = $item->total_cost;
            $dauraTotals[$month] = $totalCost;
        }
    
        $dauvaoTotals = array();
        for ($i = 1; $i <= 12; $i++) {
            $dauvaoTotals[$i] = $dauvaoTotals2[$i] - $dauraTotals[$i];
        }

        $dauvaoTotals = json_encode(array_values($dauvaoTotals));
       
        $dvht = Serviceads::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('cost');
        $drht = Daura::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('totalcost');
        $loi = $dvht - $drht;
        return view('admin/Adminhomepage', compact('user','dauvaoTotals','dauvao','currentMonth','loi','currentYear'));
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
            $html .= '<td>' . nl2br($dtv->request) . '</td>';
            $html .= '<td>' . $dtv->updated_at . '</td>';
            $html .= '<td class="project-actions text-right">';
            $html .= '<button class="btn btn-info btn-sm" type="button" data-toggle="modal"';
            $html .= ' data-target="#modal-info-dtv" data-id="' . $dtv->idtuvan . '"';
            $html .= ' data-name="' . $dtv->name . '" data-email="' . $dtv->email . '"';
            $html .= ' data-phone="' . $dtv->phone . '" data-review="' . nl2br($dtv->review) . '"';
            $html .= ' data-time="' . $dtv->created_at . '" data-request="' . nl2br($dtv->request) . '"';
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

    public function danhsachblog(Request $request){
        $user = Auth::user();
        
        $search = $request['search'];
        if(!$search || !is_string($search)){
            // Nếu không có giá trị search hoặc không phải chuỗi thì trả về tất cả bản ghi
            $listblog = Blog::all();
        } else {
            // Nếu có giá trị search và là chuỗi thì truy vấn với điều kiện
            $listblog = Blog::where('title', 'like', '%' . $search . '%')->get();
        }
        $count = $listblog->count();
        // return view('admin/BlogAdmin', ['user' => $user, 'listblog' => $listblog, 'count' => $count]);
        return view('admin/BlogAdmin', compact('user','listblog','count','search'));
    }

    public function addblog(Request $request){
        $user = Auth::user();

        $blog = new Blog;

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->timeread = $request->timeread;
        $blog->category = $request->category;
        $blog->read = 0;
        $blog->id = $user->id;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('blogimg/');
            $image->move($path, $filename);
            $blog->imageblog = '/blogimg/' . $filename;
        }

        $blog->save();

        $allemail = Emailthongbao::all();
        $title = $request['title'];
        $category = $request['category'];

        foreach ($allemail as $emailAddress) {
            Mail::send('Thongbaoemail', compact('title', 'category'), function ($email) use ($title, $category, $emailAddress) {
                $email->subject('Thông báo về bài viết mới: ' . $title);
                $email->to($emailAddress->email);
            });
        }


        return redirect()->back();
    }

    public function changeblog(Request $request){
        $user = Auth::user();

        $blog = Blog::where('idblog',$request['id'])->first();

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->timeread = $request->timeread;
        $blog->category = $request->category;
        $blog->read = $blog->read;
        $blog->id = $user->id;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('blogimg/');
            $image->move($path, $filename);
            $blog->imageblog = '/blogimg/' . $filename;
        }

        $blog->save();

        return redirect()->back();
    }

    public function deleteblog(Request $request){
        $user = Auth::user();
        $blog = Blog::where('idblog',$request['id'])->first()->delete();
        return redirect()->back();
    }


    public function in4admin(Request $request)
    {
        $user = Auth::user();
        return view('admin/Adminin4', compact('user'));
    }

    public function changein4admin(Request $request){
        $user = Auth::user();

        $user = User::where('id',$user->id)->first();

        $user->name = $request->name;
        $user->phone = $request->phone;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('adminimg/');
            $image->move($path, $filename);
            $user->avatar = '/adminimg/' . $filename;
        }

        $user->save();

        return redirect()->back()->withInput()->withErrors(['suc1' => 'Đổi thông tin cá nhân thành công']);
    }

    public function changepassadmin(Request $request){
        $user = Auth::user();
        // $request['passold'];
        // $request['passnew'];
        // $request['passconfirm'];

        if (!Hash::check($request['passold'], $user->password)) {
            return redirect()->back()->withInput()->withErrors(['passold' => 'Mật khẩu bạn nhập vào không khớp']);
        }
        
        if ($request['passold'] ===  $request['passnew']) {
            return redirect()->back()->withInput()->withErrors(['passnew' => 'Mật khẩu mới không được giống mật khẩu cũ']);
        } 

        if ($request['passnew'] !== $request['passconfirm']) {
            return redirect()->back()->withInput()->withErrors(['passcon' => 'Mật khẩu xác nhận không khớp']);
        } 
        
        $user->password = Hash::make($request['passnew']);

        $user->save();
        return redirect()->back()->withInput()->withErrors(['suc' => 'Đổi mật khẩu thành công']);
        
    }


    public function dichvu(Request $request)
    {
        $user = Auth::user();
        $dichvu = Serviceads::all();
        $countdichvu = $dichvu->count();
        $service = Service::all();
        return view('admin/Dichvu', compact('user','dichvu','countdichvu','service'));
    }

    public function dichvuadd(Request $request)
    {
        $user = Auth::user();
        $dichvu = new Serviceads();
        $dichvu->name = $request['name'];
        $dichvu->email = $request['email'];
        $dichvu->phone = $request['phone'];
        $dichvu->idservice = $request['idservice'];
        $dichvu->cost = $request['cost'];
        $dichvu->save();
        return redirect()->back();
    }

    public function dichvuchange(Request $request)
    {
        $user = Auth::user();
        $dichvu = Serviceads::where('idads',$request['id'])->first();
        $dichvu->name = $request['name'];
        $dichvu->email = $request['email'];
        $dichvu->phone = $request['phone'];
        $dichvu->idservice = $request['idservice'];
        $dichvu->cost = $request['cost'];
        $dichvu->timechange += 1;
        $dichvu->save();
        $dichvuchange = new Servicechange();
        $dichvuchange->reason = $request['reason'];
        $dichvuchange->idads = $request['id'];
        $dichvuchange->save();
        return redirect()->back();
    }


    public function dichvudelete(Request $request)
    {
        $user = Auth::user();
        $dichvu = Serviceads::where('idads',$request['id'])->first();
        $dichvuchange = Servicechange::where('idads',$request['id'])->get();
        foreach ($dichvuchange as $change) {
            $change->delete();
        }
        $dichvu->delete();
        return redirect()->back();
    }


    public function dichvusearch(Request $request)
    {
        $search = $request['search'];
        $dichvu = Serviceads::where(function($query) use ($search){
            $query->Where('email', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%');
        })->get();

        $countdichvu = $dichvu->count();
        // $service = Service::all();

        $html = '';
        foreach($dichvu as $dv){
            $html .= '<tr>';
            $html .= '<td>'. $dv->idads .'</td>';
            $html .= '<td>'. $dv->name .'</td>';
            $html .= '<td>'. $dv->email .'</td>';
            $html .= '<td>'. $dv->phone .'</td>';
            $html .= '<td>'. $dv->service->nameservice .'</td>';
            $html .= '<td>'. number_format($dv->cost, 0, ',', '.') .' đ</td>';
            $html .= '<td>'. $dv->created_at .'</td>';
            $html .= '<td>';
            if($dv->created_at != $dv->updated_at){
                $html .= '<button class="btn btn-secondary btn-sm mr-1" type="button" data-toggle="modal"';
                $html .= 'data-target="#modal-history-change" data-id="'. $dv->idads .'"';
                $html .= 'data-form="'. json_encode($dv->servicechange) .'">';
                $html .= '<i class="bi bi-list"></i>';
                $html .= 'Lịch sử';
                $html .= '</button>';
            }else{
                $html .= 'Chưa';
            }
            $html .= '</td>';
            $html .= '<td class="project-actions text-right">';
            $html .= '<button class="btn btn-primary btn-sm mr-1" type="button" data-toggle="modal"';
            $html .= 'data-target="#modal-change-serviceads" data-id="'. $dv->idads .'"';
            $html .= 'data-name="'. $dv->name .'" data-email="'. $dv->email .'"';
            $html .= 'data-phone="'. $dv->phone .'" data-cost="'. $dv->cost .'"';
            $html .= 'data-idservice="'. $dv->service->idservice .'">';
            $html .= '<i class="bi bi-pencil"></i>';
            $html .= 'Chỉnh sửa';
            $html .= '</button>';
            $html .= '<button class="btn btn-danger btn-sm" type="button" data-toggle="modal"';
            $html .= 'data-target="#modal-delete-serviceads" data-id="'. $dv->idads .'"';
            $html .= 'data-name="'. $dv->name .'" data-email="'. $dv->email .'"';
            $html .= 'data-phone="'. $dv->phone .'"';
            $html .= 'data-cost="'. number_format($dv->cost, 0, ',', '.') .' đ"';
            $html .= 'data-nameservice="'. $dv->service->nameservice .'">';
            $html .= '<i class="bi bi-pencil"></i>';
            $html .= 'Xóa';
            $html .= '</button>';
            $html .= '</td>';
            $html .= '</tr>';
        }

        return response()->json([
            'html' => $html,
            'countdichvu' => $countdichvu
        ]);
    }

    public function dauvao(Request $request)
    {
        $user = Auth::user();
        $dauvao = Serviceads::sum('cost');
        $dauvaoByMonth = Serviceads::selectRaw('MONTH(created_at) as month, SUM(cost) as total_cost')
            ->groupBy('month')
            ->get();
        $dauvaoTotals = array_fill(1, 12, 0);
        foreach ($dauvaoByMonth as $item) {
            $month = $item->month;
            $totalCost = $item->total_cost;
            $dauvaoTotals[$month] = $totalCost;
        }
        $dauvaoTotals = json_encode(array_values($dauvaoTotals));
        
        
        return view('admin/Dauvao', compact('user','dauvaoTotals','dauvao'));
    }

    public function daura(Request $request)
    {
        $user = Auth::user();
        $costdaura = Daura::sum('totalcost');
        $daura = Daura::orderBy('created_at','desc')->get();
        
        return view('admin/Daura', compact('user','daura','costdaura'));
    }

    public function dauraadd(Request $request)
    {
        $user = Auth::user();
        $daura = new Daura();
        $daura->namedaura = $request['namedaura'];
        $daura->totalcost = $request['totalcost'];
        $daura->note = $request['note'];
        $daura->save();
        return redirect()->back();
    }

    public function daurachange(Request $request)
    {
        $user = Auth::user();
        $daura = Daura::where('iddaura', $request['iddaura'])->first();
        // dd($daura);
        $daura->namedaura = $request['namedaura'];
        $daura->totalcost = $request['totalcost'];
        $daura->note = $request['note'];
        $daura->save();
        return redirect()->back();
    }

    public function dauradelete(Request $request)
    {
        $user = Auth::user();
        $daura = Daura::where('iddaura', $request['iddaura'])->first();
        $daura->delete();
        return redirect()->back();
    }


}