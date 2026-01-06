<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get("/homepage", function(){

    return view('home');

});

Route::get("/indexpage", function(){

    return view('student.index');

});

Route::get("/addpage", function(){

    return view('student.create');

});

Route::get("/showpage", function(){

    return view('student.showgit');

});

Route::get("/Back", function(){

    return redirect('/');

});