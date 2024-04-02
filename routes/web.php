<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/signup', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/store', function (Request $req) {
    // Check the validation
    $validData = $req->validate([
        'email' => 'required',
        'username' => 'required',
        'password' => 'required',
    ]);

    //if no error 
    User::create($validData);

    return response('ok working, tata byee');
});
