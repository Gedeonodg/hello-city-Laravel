<?php
use illuminate\Support\Facades\Route;


Route::get("/", fn() =>view("pages/home"))->name("home");
Route :: view("/about-us",'pages.about')->name("about");
/*
Route::get("/about-us", function(){
    return view("pages.about");
})->name("about");
*/