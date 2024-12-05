<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function(){
    return view(('admin.login'));
});

Route::get('/', function () {
    return view('home');
});

Route::get('/config', function(){
    return view('config');
});

use App\Http\Controllers\CursoController;

Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('/cursos/{fileName}', [CursoController::class, 'show'])->name('cursos.show');
