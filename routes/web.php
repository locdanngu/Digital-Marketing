<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/test', function () { return view('test'); })->name('test');

Route::get('/', function () { return view('Homepage'); })->name('home.page');

Route::get('/google-ads', function () { return view('Googleads'); })->name('googleads.page');

Route::get('/tiktok-ads', function () { return view('Tiktokads'); })->name('tiktokads.page');

Route::get('/facebook-ads', function () { return view('Facebookads'); })->name('facebookads.page');

Route::get('/creative-content', function () { return view('Creativecontent'); })->name('creativecontent.page');

Route::get('/viral-video', function () { return view('Viralvideo'); })->name('viralvideo.page');

Route::get('/KOL', function () { return view('KOL'); })->name('KOL.page');

Route::get('/booking', function () { return view('Booking'); })->name('booking.page');

Route::get('/brief', function () { return view('Brief'); })->name('brief.page');
Route::get('/portfolio', function () { return view('Portfolio'); })->name('portfolio.page');

Route::get('/blog', [UserController::class, 'blogview'])->name('blog.page');
Route::get('/content-blog/{idbaiviet}', [UserController::class, 'contentblogview'])->name('contentblog.page');

Route::get('/contact', function () { return view('Contact'); })->name('contact.page');

Route::get('/gioi-thieu', function () { return view('Gioithieu'); })->name('gioithieu.page');

Route::get('/giai-phap', function () { return view('Giaiphap'); })->name('giaiphap.page');

Route::post('/senddontuvan', [DontuvanController::class, 'senddontuvan'])->name('senddontuvan');
Route::post('/sendemailnhanthongbao', [DontuvanController::class, 'sendemailnhanthongbao'])->name('sendemailnhanthongbao');

Route::get('/Admin-home-page', [AdminController::class, 'adminhomepage'])->middleware('user')->name('adminhome.page');
Route::get('/Admin-login', [AdminController::class, 'loginformadmin'])->name('adminlogin.page');
Route::get('/Admin-register', [AdminController::class, 'registerformadmin'])->name('adminregister.page');

Route::post('/registeradmin', [AdminController::class, 'registeradmin'])->name('registeradmin'); 
Route::post('/loginadmin', [AdminController::class, 'loginadmin'])->name('loginadmin');
Route::post('/logoutadmin', [AdminController::class, 'logoutadmin'])->name('logoutadmin');

Route::middleware('user')->group(function () {
    Route::get('/don-dang-ky-tu-van', [AdminController::class, 'dondangky'])->name('newcontact.page');
    Route::post('/don-dang-ky-tu-van', [AdminController::class, 'traloidondangky'])->name('newcontact.answer');
    Route::post('/tim-kiem-don-dang-ky-tu-van', [AdminController::class, 'timkiemdondangky'])->name('newcontact.search');
    Route::post('/tim-kiem-don-tra-loi-tu-van', [AdminController::class, 'timkiemdontraloi'])->name('oldcontact.search');
    Route::get('/don-tra-loi-tu-van', [AdminController::class, 'dontraloi'])->name('oldcontact.page');
    Route::get('/danh-sach-don-tu-van', [AdminController::class, 'thongkedon'])->name('listcontact.page');

    Route::get('/danh-sach-email-nhan-thong-bao', [AdminController::class, 'danhsachemail'])->name('notification.page');
    Route::post('/xoa-email-nhan-thong-bao', [AdminController::class, 'xoaemail'])->name('deleteemail.noti');
    Route::post('/tim-kiem-email-nhan-thong-bao', [AdminController::class, 'timkiememail'])->name('notification.search');

    Route::get('/danh-sach-blog', [AdminController::class, 'danhsachblog'])->name('listblog.page');
    Route::post('/add-blog', [AdminController::class, 'addblog'])->name('blog.add');
    Route::post('/change-blog', [AdminController::class, 'changeblog'])->name('blog.change');
    Route::post('/delete-blog', [AdminController::class, 'deleteblog'])->name('blog.delete');
    Route::post('/find-blog', [AdminController::class, 'findblog'])->name('findblog.search');
    Route::get('/in4admin', [AdminController::class, 'in4admin'])->name('adminin4.page');
    Route::post('/in4admin', [AdminController::class, 'changein4admin'])->name('adminin4.change');
    Route::post('/in4adminpassword', [AdminController::class, 'changepassadmin'])->name('adminin4.changepass');
    Route::get('/dichvu', [AdminController::class, 'dichvu'])->name('dichvu.page');
    Route::post('/dichvuadd', [AdminController::class, 'dichvuadd'])->name('dichvu.add');
    Route::post('/dichvuchange', [AdminController::class, 'dichvuchange'])->name('dichvu.change');
    Route::post('/dichvudelete', [AdminController::class, 'dichvudelete'])->name('dichvu.delete');
    Route::post('/dichvusearch', [AdminController::class, 'dichvusearch'])->name('dichvu.search');
    Route::get('/dauvao', [AdminController::class, 'dauvao'])->name('dauvao.page');
    Route::get('/daura', [AdminController::class, 'daura'])->name('daura.page');
    Route::post('/dauraadd', [AdminController::class, 'dauraadd'])->name('daura.add');
});