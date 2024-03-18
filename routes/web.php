<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/item', function () {
    return view('item');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/order-details', function () {
    return view('order-details');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/cart-remove-item', function () {
    return view('cart-remove-item');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/about', function () {
    return view('about');
});