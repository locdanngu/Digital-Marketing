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


Route::get('/googleads', function () {
    return view('Googleads');
})->name('googleads.page');

Route::get('/tiktokads', function () {
    return view('Tiktokads');
})->name('tiktokads.page');


Route::get('/facebookads', function () {
    return view('Facebookads');
})->name('facebookads.page');

Route::get('/creativecontent', function () {
    return view('Creativecontent');
})->name('creativecontent.page');

Route::get('/viralvideo', function () {
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

Route::get('/contentblog', function () {
    return view('Contentblog');
})->name('contentblog.page');