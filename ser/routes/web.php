<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Posts', [Postcontroler::class , 'index' ])-> name(name : 'posts.index');
Route::get('/Posts/create' ,[Postcontroler::class , 'create'])-> name( name: 'posts.create');
Route::post('/Posts',[Postcontroler::class ,'store' ])->name ( name: 'posts.store');
Route::get('/Posts/{post}/edit',[Postcontroler::class ,'edit'])->name (name: 'posts.edit');
Route::put('/Posts/{post}',[Postcontroler::class , 'update'])->name (name:'posts.update');
Route::get('/Posts/{Post}', [Postcontroler::class , 'Schow'])->name(name:'posts.schow');
Route::delete('/Posts/{Post}',[Postcontroler::class , 'destroy'])->name(name:'posts.destroy');
