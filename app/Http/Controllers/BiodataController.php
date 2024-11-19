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
}
