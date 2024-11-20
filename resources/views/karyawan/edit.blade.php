<!-- memnggil template -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-center">
                    <p>Detail karyawan</p>
                </div>

                <form action="{{route('karyawan.update', $data->id)}}" method="post">
                    @csrf
                    {{method_field('put')}}
                    <div class="card-body">
                        <!-- input nama karyawab -->
                        <div class="form-group">
                            <label class="form-label"> Nama Karyawan </label>
                            <input type="text" name="nama_karyawan" value="{{$data->nama_karyawan}}" class="form-control">
                        </div>

                        <!-- input umur -->
                        <div class="form-group">
                            <label class="form-label"> Umur Karyawan </label>
                            <input type="number" name="umur" value="{{$data->umur}}" class="form-control">
                        </div>

                        <!-- nik -->
                        <div class="form-group">
                            <label class="form-label"> Nomor Induk Karyawan </label>
                            <input type="number" name="nik" value="{{$data->nik}}" class="form-control">
                        </div>

                        <!-- tempat lahir -->
                        <div class="form-group">
                            <label class="form-label"> Tempat Lahir </label>
                            <input type="text" name="tempat_lahir" value="{{$data->tempat_lahir}}" class="form-control">
                        </div>

                        <!-- tanggal lahir -->
                        <div class="form-group">
                            <label class="form-label"> Tanggal Lahir </label>
                            <input type="date" name="tanggal_lahir" value="{{$data->tanggal_lahir}}" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('karyawan.index')}}" class="btn text-muted">Kembali</a>
                        <button type="submit" class="btn btn-outline-success">Edit karyawan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection