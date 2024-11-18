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

// prefix => memberikan nama grup nya.
Route::prefix('training')->group(function(){

    // ini untuk menampilkan localhost:8000/training/mtcna
    Route::get('mtcna', function(){
        return 'ini adalah halaman MTCNA';
        // memberikan name untuk uri MTCNA
    })->name('training-mtcna');

    // ini untuk menampilkan localhost:8000/training/laravel
    Route::get('laravel', function(){
        return 'ini adalah halaman Laravel';
        // memberikan name untuk uri Laravel
    })->name('training-laravel');

    // ini untuk menampilkan localhost:8000/training/ccna
    Route::get('ccna', function(){
        return 'ini adalah halaman CCNA';
        // memberikan name untuk uri CCNA
    })->name('training-ccna');

});

