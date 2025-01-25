<?php

use Illuminate\Support\Facades\Route;

Route::get('/oauth/login', function () {
    return view('log-in.log-in');
});
Route::get('/oauth/logout', function () {
    return view('log-in.logout');
});
Route::get('/oauth/forgot-password', function () {
    return view('log-in.forgotpassword');
});