<!-- memnggil template -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-center">
                    <p>Halaman Karyawan</p>
                    <a href="{{route('karyawan.create')}}" class="btn btn-outline-success">Tambah karyawan</a>
                </div>

                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success bg-opacity-50">
                            <span class="text-success">Yeay!</span>
                            {{session('success')}}
                        </div>
                    @endif


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>Nama Karyawan</th>
                                <th>NIK</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->nama_karyawan}}</td>
                                    <td>{{$item->nik}}</td>
                                    <td>
                                        <a href="{{route('karyawan.show', $item->id)}}" class="btn text-muted">detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection