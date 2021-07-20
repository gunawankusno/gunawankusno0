<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
use Alert;


class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all(); // sama dengan SELECT * FROM namatable
        return view('makul.index', compact('makul'));
    }

    public function create()
    {
        return view('makul.create');
    }

    public function store(Request $request)
    {
       Makul::create($request->all());
       alert('Sukses','Simpan Data Berhasil','success');
       return redirect()->route('makul');
    }

    public function edit(Request $request, $id)
    {
        $makul = Makul::where('id',$id)->first();
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::where('id',$id)->update([
            'nama_makul' => $request->nama_makul,
            'sks' => $request->sks
        ]);
        alert('Sukses','Simpan Data Berhasil','success');
        return redirect()->route('makul');
    }

    public function destroy(Request $request, $id)
    {
        $makul = Makul::where('id',$id)->delete();
        alert('Sukses','Hapus Data Berhasil','success');
        return redirect()->route('makul');
    }
}