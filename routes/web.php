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



// ===================

Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\User\LoginRegister\LoginController@index']);
Route::post('/submitLogin', ['as' => 'submitLogin', 'uses' => 'App\Http\Controllers\User\LoginRegister\LoginController@submitLogin']);

Route::get('/admin', ['as' => 'admin', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@index']);
Route::post('/submitLoginAdmin', ['as' => 'submitLoginAdmin', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@submitLogin']);

Route::get('/add-users', ['as' => 'add-users', 'uses' => 'App\Http\Controllers\User\LoginRegister\RegisterController@addUsers']);
Route::post('/add-users', ['as' => 'add-users', 'uses' => 'App\Http\Controllers\User\LoginRegister\RegisterController@register']);
Route::post('/get-college-list', ['as' => 'get-college-list', 'uses' => 'App\Http\Controllers\CommonController@getCollegeList']);
Route::get('/log-out-user', ['as' => 'log-out-user', 'uses' => 'App\Http\Controllers\CommonController@logoutUser']);
Route::get('/log-out-admin', ['as' => 'log-out-admin', 'uses' => 'App\Http\Controllers\CommonController@logoutAdmin']);

Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => ['user_auth']], function () {
        Route::get('/dashboard', ['as' => '/dashboard', 'uses' => 'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);
        Route::get('/project-registration', ['as' => 'project-registration', 'uses' => 'App\Http\Controllers\User\StudentController@add']);
        Route::post('/project-registration-save', ['as' => 'project-registration-save', 'uses' => 'App\Http\Controllers\User\StudentController@store']);
      
        Route::get('/add-industry-data', ['as' => 'add-industry-data', 'uses' => 'App\Http\Controllers\User\IndusrtyController@add']);
        Route::post('/add-industry-data', ['as' => 'add-industry-data', 'uses' => 'App\Http\Controllers\User\IndusrtyController@store']);
        Route::post('/project-registration-upadte', ['as' => 'project-registration-upadte', 'uses' => 'App\Http\Controllers\User\StudentController@registered_update']);
        // Route::post('/save-messege', ['as' => 'save-messege', 'uses' => 'App\Http\Controllers\User\StudentController@saveMessege']);

    });
});

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => ['admin_auth']], function () {

        Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);
        Route::get('/register-users', ['as' => 'register-users', 'uses' => 'App\Http\Controllers\Admin\StudentController@index']);
        Route::post('/show-users', ['as' => 'show-users', 'uses' => 'App\Http\Controllers\Admin\StudentController@viewDetailsForParticipant']);
        Route::post('/save-messege', ['as' => 'save-messege', 'uses' => 'App\Http\Controllers\Admin\StudentController@saveMessege']);
        Route::post('/update', ['as' => 'update', 'uses' => 'App\Http\Controllers\Admin\StudentController@update']);
        
    });
});