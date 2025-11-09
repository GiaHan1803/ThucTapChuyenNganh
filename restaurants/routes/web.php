<?php

use Illuminate\Support\Facades\Route;

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

////////////////////////
Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');

Route::get('/admin/category', function () {
    return view('admin//category/category-list');
})->name('category');


Route::get('/admin/product', function () {
    return view('admin/product/product-list');
})->name('product');