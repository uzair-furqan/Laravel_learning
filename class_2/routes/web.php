<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view("/" , "welcome" )-> name("home_page");
Route::view("/about" ,"about")-> name("about_page");
Route::view("/contact" ,"contact") -> name("contact_page");

Route::get("uzair/{id}/{name}" ,function($id , $name){
    echo "the id is $id and the name is $name";
});

Route::post("/submit" , function(Request $request){
    $name = $request -> input("name");

    return "welcome " .$name;
});
