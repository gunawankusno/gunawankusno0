@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mata Kuliah</div>
                <div class="card-body">
                    <form action="{{ route('update.makul', $makul->id) }}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label>Kode Mata Kuliah</label>
                            <input type="text" value="{{ is_null($makul) ? '' : $makul->kd_makul }}" name="kd_makul" class="form-control col-md-9" placeholder="Masukkan Kode Mata Kuliah">
                        </div>

                        <div class="form-group">
                            <label>Nama Mata Kuliah</label>
                            <input type="text" value="{{ is_null($makul) ? '' : $makul->nama_makul }}" name="nama_makul" class="form-control col-md-9" placeholder="Masukkan Nama Mata Kuliah">
                        </div>

                        <div class="form-group">
                            <label>SKS</label>
                            <input type="number" value="{{ is_null($makul) ? '' : $makul->sks }}" name="sks" class="form-control col-md-9" placeholder="Masukkan SKS Mata Kuliah">
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