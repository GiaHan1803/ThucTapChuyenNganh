<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//route login
// Route::get('/login', function () {
//     return view('auth/login');
// })->name('login');



// Route register
// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::post('/logout', function () {
//     Auth::logout();
//     session()->invalidate();
//     session()->regenerateToken();
//     return redirect('/');
// })->name('logout');

////////////////////////
Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');

Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    Route::resource('category', CategoryController::class);
    Route::resource('dashboard', LoginController::class);
    Route::resource('product',ProductController::class);
 
});

Auth::routes();