<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function list()
    {
        $names = ["namal","saman","john"];
        $title = "About Page";
        return view('home.about', compact('names','title'));
    }
}
