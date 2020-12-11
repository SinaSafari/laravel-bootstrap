<?php

use Illuminate\Support\Facades\Route;

/*
 * home page
 * */
Route::get('/', function (){
    return view('home');
})->name("home");

/*
 * documentation of blade
 * */
Route::get('/doc', function() {
    return view("Doc/doc");
})->name("doc");
