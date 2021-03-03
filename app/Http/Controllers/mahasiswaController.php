<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function index()
    {
        $data = mahasiswa::all();
        return view('index', compact('data'));
    }

    public function back()
    {
        return redirect('/');
    }

    public function create()
    {
        return view('create');
    }

    public function insert(Request $request)
    {
        $data = new mahasiswa();
        $data->nim = $request->get('nim');
        $data->nama_lengkap = $request->get('nama_lengkap');
        $data->fakultas = $request->get('fakultas');
        $data->prodi = $request->get('prodi');
        $data->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $data = mahasiswa::find($id);
        $data->delete();
        return back();
    }

    public function edit($id)
    {
        $data = mahasiswa::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = mahasiswa::findOrFail($id);
        $data->nim = $request->get('nim');
        $data->nama_lengkap = $request->get('nama_lengkap');
        $data->fakultas = $request->get('fakultas');
        $data->prodi = $request->get('prodi');
        $data->save();
        return redirect('/')->with('alert-success', 'Data berhasil Diubah.');
    }

    public function detail($id)
    {
        $data = mahasiswa::find($id);
        return view('detail', compact('data'));
    }
}
