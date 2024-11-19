<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        return 'ini adalah index biodata';
    }

    public function create()
    {
        return view('biodata.create');
    }

    public function kirim(Request $request)
    {
        // mengambil data yang diinputkan oleh user, disimpan semntara oleh $request
        $input = $request->all();
        dd($input); //menampilkan value yang diinputkan user
    }

}
