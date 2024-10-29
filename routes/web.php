<?php

use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// ini adalah rute tanpa MVC
Route::get('/rutebaru', function()
{
    return '<h1 style="color:red">Ini adalah rute baru tanpa MVC</h1>';
});


// ini adalah rute dengan view
Route::get('/ruteview', function () {
    return view('ruteview');
});

// ini adalah rute dengan view dan contreoller
Route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);

// ini adalah rute dengan view,controller & model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);

//tugas
Route::get('/rutebiodata', [BiodataController::class, 'menampilkanBiodata']);
