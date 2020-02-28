<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view("/","home.index");

Route::get('/', function () {
    return view('home.welcome');
});

Route::get('home', function () {
    return view('home.home');
});

Route::get('contact', function () {
    return view('home.contact',["title"=>"Content page"]);
});

// Route::get('about', function () {
//     $names = ["namal","saman","john"];
//     $title = "About Page";

//This way passes the title and names variables to the about.blade.php, but it is long to type
//     return view('home.about', ["title"=>$title,"names"=>$names]);

//This way passes the title and names variables to the about.blade.php, in a short way
//     return view('home.about', compact('names','title'));
// });

//This calls the function from the Students Controller and passes it into the about.blade.php
Route::get('about', 'StudentsController@list');
