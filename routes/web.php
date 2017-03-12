<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('view.home');
});

Route::get('/about', function () {
    return view('view.about');
});

Route::get('/room', function () {
    return view('view.room');
});

Route::get('/detailroom', function () {
    return view('view.detailroom');
});

// Route::get('/reservation', function () {
//     return view('view.reservation');
// });

Route::get('/check', function () {
    return view('view.check');
});

Route::get('/select', function () {
    return view('view.select');
});

Route::get('/pay', function () {
    return view('view.pay');
});

Route::get('/done', function () {
    return view('view.done');
});

Route::get('/services', function () {
    return view('view.services');
});

Route::get('/gallery', function () {
    return view('view.gallery');
});

Route::get('/contact', function () {
    return view('view.contact');
});

Route::get('/datgiuong','DatGiuongController@getdatgiuong');
Route::post('/datgiuong','DatGiuongController@postdatgiuong');
