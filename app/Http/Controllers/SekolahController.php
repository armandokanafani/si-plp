<?php

namespace App\Http\Controllers;

use App\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SekolahController extends Controller
{
    public function index()
    {
        return view('sekolah.index')->with([
            'user' => Auth::user(),
            'datas' => Sekolah::get()
        ]);
    }

    public function create()
    {
        return view('sekolah.create')->with([
            'user' => Auth::user()
        ]);
    }

    public function addProcess(Request $request)
    {

        // Proses penambahan
        Sekolah::create([
            'nama_sekolah' => $request->input('nama_sekolah'),
            'alamat_sekolah' => $request->input('alamat_sekolah'),
            'kepala_sekolah' => $request->input('kepala_sekolah'),
            'guru_pamong' => $request->input('guru_pamong')
        ]);

        $request->session()->flash('message', 'Berhasil Ditambahkan');
        $request->session()->flash('message_type', 'success');
        return redirect()->route('sekolah.index');
    }


    public function edit($id)
    {

        return view('Sekolah.edit')->with([
            'data' => Sekolah::find($id),
            'user' => Auth::user()
        ]);
    }

    public function editProcess(Request $request, $id)
    {
        Sekolah::find($id)->update([
            'nama_sekolah' => $request->input('nama_sekolah'),
            'alamat_sekolah' => $request->input('alamat_sekolah'),
            'kepala_sekolah' => $request->input('kepala_sekolah'),
            'guru_pamong' => $request->input('guru_pamong')
        ]);

        return redirect()->route('sekolah.index');
    }

    public function delete($id)
    {
        Sekolah::destroy($id);

        return redirect()->route('sekolah.index');
    }
}
