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

Route::get('/', function () {
    return view('Homepage');
})->name('home.page');


Route::get('/google-ads', function () {
    return view('Googleads');
})->name('googleads.page');

Route::get('/tiktok-ads', function () {
    return view('Tiktokads');
})->name('tiktokads.page');


Route::get('/facebook-ads', function () {
    return view('Facebookads');
})->name('facebookads.page');

Route::get('/creative-content', function () {
    return view('Creativecontent');
})->name('creativecontent.page');

Route::get('/viral-video', function () {
    return view('Viralvideo');
})->name('viralvideo.page');

Route::get('/KOL', function () {
    return view('KOL');
})->name('KOL.page');

Route::get('/booking', function () {
    return view('Booking');
})->name('booking.page');

Route::get('/brief', function () {
    return view('Brief');
})->name('brief.page');

Route::get('/portfolio', function () {
    return view('Portfolio');
})->name('portfolio.page');

Route::get('/blog', function () {
    return view('Blog');
})->name('blog.page');

Route::get('/contact', function () {
    return view('Contact');
})->name('contact.page');

Route::get('/content-blog', function () {
    return view('Contentblog');
})->name('contentblog.page');

Route::get('/gioi-thieu', function () {
    return view('Gioithieu');
})->name('gioithieu.page');

Route::get('/giai-phap', function () {
    return view('Giaiphap');
})->name('giaiphap.page');



Route::get('/Admin-home-page', function () {
    return view('Adminhomepage');
})->name('adminhome.page');