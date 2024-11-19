<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang'; //mendefinisikan nama table yang akan digunakan.

    // mengenalkan column yang ada di tabel barang.
    // protected $fillable =
    // [
    //     'nama_barang', 'merek', 'deskripsi', 'kategori'
    // ];


    // cara mudah atau tercepat (shortcut)
    protected $guarded;

}
