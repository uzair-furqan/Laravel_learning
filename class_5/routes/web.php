<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::get("index/{id}",[mycontroller::class,"index"]);
Route::get("about/",[mycontroller::class,"about"]);
Route::get("contact/",[mycontroller::class,"contact"]);