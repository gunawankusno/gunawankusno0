<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Makul;
use Illuminate\Http\Request;
use Alert;

    class NilaiController extends Controller
    {
        public function index()
        {
            $nilai = Nilai::with(['mahasiswa'],['makul'])->get(); //select * from nama_table;
            return view('nilai.index', compact('nilai'));
        }

        public function create()
        {
            $mahasiswa  = Mahasiswa::all();
            $makul = Makul::all();
            return view('nilai.create', compact('mahasiswa','makul'));
        }

        public function store(Request $request)
        {
        Nilai::create($request->all());
        alert('Sukses','Simpan Data Berhasil','success');
        return redirect()->route('nilai');
        }

        public function edit(Request $request, $id)
        {
            $mahasiswa = Mahasiswa::all();
            $makul = Makul::all();
            $nilai = Nilai::find($id);
            return view('nilai.edit', compact('nilai','mahasiswa','makul'));
        }

        public function update(Request $request, $id)
        {
            $nilai = Nilai::find($id);
            $nilai->update($request->all());
            alert('Sukses','Simpan Data Berhasil','success');
            return redirect()->route('nilai');
        }

        public function destroy(Request $request, $id)
        {
            $nilai = Nilai::find($id);
            $nilai->delete($id);
            alert('Sukses','Hapus Data Berhasil','success');
            return redirect()->route('nilai');
        }
    }