<?php

use App\Http\Controllers\BiodataController;
use App\Http\Middleware\CekUmur;
use Illuminate\Http\Request;
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

// Routing dengan middleware.
Route::get('cek-umur', function() {
    return view('umur.cek'); //jika halamannya berada di dalam folder, panggil terlebih dahulu foldernya.
});

// Routing untuk mengirim data umur (cek umur user);
Route::post('proses-umur', function(Request $request){

    // validasi untuk user menuliskan umur
    $request->validate([
        'umur' => 'integer|required|max:150'
    ]);

    // Mengambil nilai yang diinputkan dari user 
    $request->session()->put('umur', $request->umur);

    // mengarahkan ke route halaman berhasil.
    return redirect()->route('halaman-berhasil');
})->name('proses');


Route::get('berhasil', function(){

    return 'selamat, anda berumur lebih dari 18 tahun';

})->name('halaman-berhasil')->middleware(CekUmur::class);


// Route dengan controller
//route get untuk menampilkan respon atau halaman.
Route::get('biodata', [BiodataController::class, 'index'])->name('index-biodata');
Route::get('biodata/create', [BiodataController::class, 'create'])->name('create-biodata');

// route post untuk mengirimkan request/data pada http.
Route::post('biodata/kirim', [BiodataController::class, 'kirim'])->name('kirim-biodata');















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



