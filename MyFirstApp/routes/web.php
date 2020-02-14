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

Route::get('/', function () {
    return view('home.welcome');
});

Route::get('home', function () {
    return view('home.home');
});

Route::get('contact', function () {
    return view('home.contact',["title"=>"Content page"]);
});

Route::get('about', function () {
    $names = ["namal","saman","john"];
    return view('home.about',["contacts"=>$names]);
});
