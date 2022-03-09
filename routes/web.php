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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
   return '<h1>About Page</h1>';
});

/*Route::get('/contact', function () {
   return view('/contact');
});

Route::post('/send-email', function () {
   return 'send';
});*/

Route::match(['post', 'get'], '/contact', function () {
   return view('/contact');
})->name('contact2');

Route::view('/test', 'test', ['test' => 'Test Data']);
Route::redirect('/about', 'contact');
Route::permanentRedirect('/test', '/contact');
