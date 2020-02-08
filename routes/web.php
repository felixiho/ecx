<?php

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/projects', function(){
    return view('projects');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/download', 'InfoPacket@getDownload')->name('download');
Route::get('/get-started', function(){
    return view('get-started');
});

Auth::routes();
// Route::get('/login', function(){
//     return view('login');
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/attendance', function(){
    return view('attendance');
});
Route::post('/mark-attendance', 'Attendance@store')->name('mark-attendance');
