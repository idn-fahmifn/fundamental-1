<!-- memnggil template -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>

                <form action="#" method="post">
                    @csrf
                    <div class="card-body">
                        <!-- input nama karyawab -->
                        <div class="form-group">
                            <label class="form-label"> Nama Karyawan </label>
                            <input type="text" name="nama_karyawan" class="form-control">
                        </div>

                        <!-- input umur -->
                        <div class="form-group">
                            <label class="form-label"> Umur Karyawan </label>
                            <input type="number" name="umur" class="form-control">
                        </div>

                        <!-- nik -->
                        <div class="form-group">
                            <label class="form-label"> Nomor Induk Karyawan </label>
                            <input type="number" name="nik" class="form-control">
                        </div>

                        <!-- tempat lahir -->
                        <div class="form-group">
                            <label class="form-label"> Tempat Lahir </label>
                            <input type="text" name="tempat_lahir" class="form-control">
                        </div>

                        <!-- tanggal lahir -->
                        <div class="form-group">
                            <label class="form-label"> Tanggal Lahir </label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection