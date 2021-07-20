@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Makul</div>
                <div class="card-body">
                
                    <form action="{{route('simpan.makul')}}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label>Kode Makul</label>
                            <input type="text" name="kd_makul" class="form-control col-md-9" placeholder="Masukkan Kode Mata kuliah">
                        </div>

                        <div class="form-group">
                            <label>Nama Makul</label>
                            <input type="text" name="nama_makul" class="form-control col-md-9" placeholder="Masukkan Nama Mata Kuliah">
                        </div>

                        <div class="form-group">
                            <label>SKS</label>
                            <input type="number" name="sks" class="form-control col-md-9" placeholder="Masukkan SKS Mata Kuliah">
                        </div>

                        <td>
                            <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
                            <a href="{{ route('makul') }}" class="btn btn-sm btn-danger">CANCEL</a>
                        </td><br><br>
                        </tr>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection