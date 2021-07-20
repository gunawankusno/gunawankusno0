@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai
                    <a href="{{ route('tambah.nilai') }}" class="float-right btn btn-dark btn-md">Tambah Nilai</a></div>
                <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th style="text-align: center;">No.</th>
                            <th style="text-align: center;">NPM</th>
                            <th style="text-align: center;">NAMA LENGKAP</th>
                            <th style="text-align: center;">NAMA MAKUL</th>
                            <th style="text-align: center;">SKS</th>
                            <th style="text-align: center;">NILAI</th>
                            <th style="text-align: center;">AKSI</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($nilai as $n)
                        <tr>
                        <td style="text-align: center;">{{ $no++ }}</td>
                        <td>{{ $n->mahasiswa->npm }}</td>
                        <th>{{ $n->mahasiswa->user->name }}</th>
                        <td>{{ $n->makul->nama_makul }}</td>
                        <td>{{ $n->makul->sks }}</td>
                        <td>{{ $n->nilai }}</td>
                        <td>
                            <a href="{{ route('edit.nilai', $n->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            <a href="{{ route('hapus.nilai', $n->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection