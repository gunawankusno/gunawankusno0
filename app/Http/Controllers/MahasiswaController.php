<?php

namespace App\Http\Controllers;

    use App\Mahasiswa;
    use App\User;
    use Illuminate\Http\Request;
    use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['User'])->get(); // sama dengan SELECT * FROM namatable
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $user = User::all();
        return view('mahasiswa.create', compact('user'));
    }

    public function store(Request $request)
    {
       Mahasiswa::create($request->all());
       alert('Sukses','Simpan Data Berhasil','success');
       return redirect()->route('mahasiswa');
    }

    public function edit(Request $request, $id)
    {
        $user = User::all();
        $mahasiswa = Mahasiswa::where('id',$id)->first();
        return view('mahasiswa.edit', compact('mahasiswa','user'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        alert('Sukses','Simpan Data Berhasil','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::where('id',$id)->delete();
        alert('Sukses','Hapus Data Berhasil','success');
        return redirect()->route('mahasiswa');
    }
}