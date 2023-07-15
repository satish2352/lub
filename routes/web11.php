<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website.pages.index');
});

Route::get('/about', function () {
    return view('website.pages.about');
});

Route::get('/events', function () {
    return view('website.pages.events');
});


Route::get('/contact-us', function () {
    return view('website.pages.contact_us');
});

Route::get('/registration', function () {
    return view('website.pages.student_registration');
});

Route::get('/login', function () {
    return view('website.login');
});
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});
