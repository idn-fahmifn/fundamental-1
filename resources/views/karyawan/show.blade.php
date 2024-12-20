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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Nama Karyawan</th>
                                    <td>{{$data->nama_karyawan}}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Induk Karyawan</th>
                                    <td>{{$data->nik}}</td>
                                </tr>
                                <tr>
                                    <th>Umur</th>
                                    <td>{{$data->umur}}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{$data->tempat_lahir}}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{$data->tanggal_lahir}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer">
                    <form action="{{route('karyawan.destroy', $data->id)}}" method="post">
                        @csrf
                        {{method_field('delete')}}
                        <a href="{{route('karyawan.index')}}" class="btn text-muted">Kembali</a>
                        <a href="{{route('karyawan.edit', $data->id)}}" class="btn btn-outline-success">Edit karyawan</a>
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin anda akan menghapus?')">Hapus karyawan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection