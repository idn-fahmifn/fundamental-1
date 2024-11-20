<!-- memnggil template -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-center">
                    <p>Halaman Karyawan</p>
                    <a href="" class="btn btn-success">tambah</a>
                </div>

                <div class="card-body">
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
                                        <a href="" class="btn text-muted">detail</a>
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