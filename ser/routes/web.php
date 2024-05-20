<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Posts', [Postcontroler::class , 'index' ])-> name(name : 'posts.index');
Route::get('/Posts/{Post}', [Postcontroler::class , 'Schow'])->name(name:'posts.schow');