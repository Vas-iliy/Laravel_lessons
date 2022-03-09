<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//тренировка
/*Route::get('/', function () {
    return view('home');
});
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
Route::match(['post', 'get'], '/contact', function () {
   return view('/contact');
})->name('contact2');
Route::view('/test', 'test', ['test' => 'Test Data']);
Route::redirect('/about', 'contact');
Route::permanentRedirect('/test', '/contact');

// можно записать эти условия в route service provider
/*Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return 'post' . $id . "/$slug";
})->where(['id' => '[0-9]+', 'slug' => '[a-z0-9-]+']);
Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return 'post' . $id . "/$slug";
});*/

//группировка
/*Route::prefix('admin')->group(function () {
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
