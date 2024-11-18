<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Simple Routing.
Route::get('profile', function(){
    return view('profile');
});

// Routing dengan parameters
Route::get('profile/{param}', function($param){
    return 'Ini adalah halaman profile dari :' .$param ;
});


// Route grouping dengan prefix
Route::prefix('training')->group(function(){

    Route::get('mtcna', function(){
        return 'ini adalah halaman MTCNA';
    });

    Route::get('laravel', function(){
        return 'ini adalah halaman Laravel';
    });

    Route::get('ccna', function(){
        return 'ini adalah halaman CCNA';
    });

});

