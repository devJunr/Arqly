<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function(){
    return view(('admin.login'));
});

Route::get('/', function () {
    return view('home');
});

Route::get('/senhas', function (){
    return view('senhas');
});

Route::get('/newPass', function (){
    return view('newPass');
    
});

Route::get('/config', function(){
    return view('config');
});