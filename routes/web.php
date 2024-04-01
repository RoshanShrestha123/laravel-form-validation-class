<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/store', function () {
    return response('ok working, tata byee');
});
