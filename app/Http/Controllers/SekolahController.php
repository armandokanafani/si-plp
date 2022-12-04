<?php

namespace App\Http\Controllers;

use App\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        $sekolahs = Sekolah::get();
        return view('Sekolah.index', compact('sekolahs'));
    }

    public function create()
    {
        return view('Sekolah.create');
    }

    public function store(Request $request)
    {
        $sekolah = new Sekolah();
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat_sekolah = $request->alamat_sekolah;
        $sekolah->keminatan = $request->keminatan;
        $sekolah->guru_pamong = $request->guru_pamong;
        $sekolah->kepala_sekolah = $request->kepala_sekolah;
        $sekolah->save();

        return redirect()->route('sekolah.index');
    }

    public function show($id)
    {
        $sekolah = Sekolah::findOrFail($id);

        return view('Sekolah.show', [
            'sekolah' => $sekolah
        ]); 
    }

    public function edit(Sekolah $sekolah)
    {
        // $sekolah = Sekolah::findOrFail($id);
        return view('sekolah.edit',compact('sekolah'));
    }

    public function update(Request $request, $id)
    {
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat_sekolah = $request->alamat_sekolah;
        $sekolah->keminatan = $request->keminatan;
        $sekolah->guru_pamong = $request->guru_pamong;
        $sekolah->kepala_sekolah = $request->kepala_sekolah;
        
        $sekolah->save();
        return redirect()->route('sekolah.index');
    }

    public function destroy($id)
    {
        $sekolah = Sekolah::find($id);
        $sekolah->delete();

        return redirect()->route('sekolah.index');
    }
}
