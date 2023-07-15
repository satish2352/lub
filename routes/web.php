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

// Route::get('/', function () {
//     return view('welcome');
// });


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

// ===================

Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@index']);
Route::post('/submitLogin', ['as' => 'submitLogin', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@submitLogin']);
Route::get('/add-users', ['as' => 'add-users', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@addUsers']);
Route::post('/add-users', ['as' => 'add-users', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@register']);

Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', ['as' => '/dashboard', 'uses' => 'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);
    Route::get('/list-users', ['as' => 'list-users', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@index']);
   
   

    Route::get('/students', ['as' => '/students', 'uses' => 'App\Http\Controllers\Admin\StudentController@add']);


Route::get('/log-out', ['as' => 'log-out', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@logout']);

});