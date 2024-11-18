<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/senhas', function (){
    return view('senhas');
});

Route::get('/newPass', function (){
    return view('newPass');
});