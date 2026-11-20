<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function index($id)
    {
        return "this is the first page of the website and the id is $id";
    }
    public function about()
    {
        $name = "uzair";
        $age = 20;
        return view('about' ,compact("name" , "age"));
    }
    public function contact()
    {
        return "this is the Contact page of the website";
    }
}
