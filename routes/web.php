<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//тренировка
/*Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
   return '<h1>About Page</h1>';
});*/

//отправка формы
/*Route::get('/contact', function () {
   return view('/contact');
});
Route::post('/send-email', function () {
   return 'send';
});*/

//менование и редирект
/*Route::match(['post', 'get'], '/contact', function () {
   return view('/contact');
})->name('contact2');
Route::view('/test', 'test', ['test' => 'Test Data']);
Route::redirect('/about', 'contact');
Route::permanentRedirect('/test', '/contact');*/

// можно записать эти условия в route service provider
/*Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return 'post' . $id . "/$slug";
})->where(['id' => '[0-9]+', 'slug' => '[a-z0-9-]+']);
Route::get('/post/{id}/{slug?}', function ($id, $slug = '') {
    return 'post' . $id . "/$slug";
});*/

//группировка
/*Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/posts', function () {
        return 'Posts list';
    });
    Route::get('/post/create', function () {
        return 'Post Create';
    });
    Route::get('/post/{id}/edit', function ($id) {
        return 'Post Update' . $id;
    });
});*/

//редирект на страницы исключений
/*Route::fallback(function () {
   //return redirect()->route('home');
    abort(404, 'oops');
});*/

//шаблоны ресурсов
/*Route::get('/', 'HomeController@index');
Route::get('/test', 'HomeController@test');
Route::get('/test2', 'Test\TestController@index');
Route::get('/page/{slug}', 'PageController@show');

Route::resource('/posts', 'PostController', ['parameters' => [
    'posts' => 'id'
]]);*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('post.create');
Route::post('/store', 'HomeController@store')->name('post.store');

Route::get('/page/about', 'PageController@show')->name('page.about');

//mail
Route::match(['get', 'post'], '/send', 'ContactController@send')->name('send');

//Auth
Route::get('/register', 'UserController@register')->name('register.create');
Route::post('/register', 'UserController@store')->name('register.store');
Route::get('/login', 'UserController@loginForm')->name('login.create');
Route::post('/login', 'UserController@login')->name('login');
Route::get('/logout', 'UserController@logout')->name('logout');

//admin
Route::get('/admin', 'Admin\MainController@index');






















