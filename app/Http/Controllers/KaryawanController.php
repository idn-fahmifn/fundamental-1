<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // memanggil semua nilai yang terdapat pada model karywan.

        $data = Karyawan::all();
        return view('karyawan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $slug = $input['nama_karyawan'].random_int(000000, 999999);
        $lower = Str::lower($slug);
        $input['slug'] = $lower;

        Karyawan::create($input);
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Karyawan::find($id);
        return view('karyawan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Karyawan::find($id);
        return view('karyawan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Karyawan::find($id);
        $data->update($input);
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Karyawan::find($id);
        $data->delete();
        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus');
    }

    

}
