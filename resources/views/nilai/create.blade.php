@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Tambah Data Nilai</div>
                <div class="card-body">

                    <form action="{{route('simpan.nilai')}}" method="POST" >
                        @csrf
                        <div class="form-group">
                        <label for="mahasiswa_id" >Nama Mahasiswa</label>
                            <select class="form-control" name="mahasiswa_id" id="mahasiwa_id">
                                <option value="disabled selected">--- Pilih Nama ---</option>
                                    @foreach ($mahasiswa as $mhs)
                                        <option value="{{ $mhs->id }}" > {{ $mhs->user->name }}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                        <label for="makul">Nama Makul</label>
                            <select name="makul_id" id="makul_id" class="form-control">
                                <option value="" disabled selected>-- Pilih Nama Makul --</option>
                                    @foreach ($makul as $m)
                                        <option value="{{ $m->id}}">{{$m->nama_makul}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nilai" >Nilai</label>
                                <input type="number" name="nilai" class="form-control"  placeholder="Tambahkan Nilai">
                        </div>

                        <td>
                            <a href="{{ route('nilai') }}" class="btn btn-sm btn-danger float-right">CANCEL</a>
                            <button class="btn btn-sm btn-primary float-right" type="submit">SAVE</button>
                        </td><br><br>
                        </tr>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection