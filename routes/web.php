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

// fallback untuk mengarahkan etika user memanggil halaman yang routenya tidak didefinisikan.
Route::fallback(function(){
    return '404, Halamannya gaada';
});

// CRUD 
/**
 * 1. Routing untuk halaman index (get::index) -> menampilkan semua data,
 * 2. Routing untuk halaman create (get::create) -> menampilkan halaman,
 * 3. Routing untuk mengirimkan data (post::kirim-data) -> untuk mengirimkan data ke database.
 * 4. Routing untuk memanggil data spesifik (get::detail) -> untuk melihat data secara spesifik.
 * 5. Routing untuk edit data (get::edit) -> untuk menampilkan halaman edit.
 * 6. Routing mengirim data yang sudah diedit (post::edit) -> untuk mengirimkan data yang sudah diedit.
 * 7. Routing mengirim menghapus data (post::edit) -> untuk menghapus data secara spesifik.
 */

// Route::resource('profile', ProfileController::class);



