<?php

namespace App\Http\Controllers;

use App\Pendataan;
use App\Sekolah;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendataanController extends Controller
{
    public function index()
    {

        return view('penempatan.index')->with([
            'user' => Auth::user(),
            'datas' => Pendataan::get()
        ]);
    }


    public function create()
    {
        return view('penempatan.create')->with([
            'user' => Auth::user(),
            'data_sekolah' => Sekolah::get(),
            'data_dospem' => User::get()

        ]);
    }

    public function addProcess(Request $request)
    {
        // Cek Data
        $count = Pendataan::where('nim', $request->input('nim'))->exists();

        if ($count > 0) {
            return redirect('mahasiswa/pendataan-add')->with('status', 'Anda telah mengisi pendataan');
        }

        // Proses penambahan (Mahasiswa)
        Pendataan::create([
            'user_id' => $request->input('user_id'),
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'sekolah' => $request->input('sekolah'),
            'peminatan' => $request->input('peminatan'),
            'dospem' => $request->input('dospem'),
            'pamong' => $request->input('pamong'),
            'status_koordinator' => $request->input('status_koordinator'),
            'status_pamong' => $request->input('status_pamong')
        ]);

        $request->session()->flash('message', 'Berhasil Ditambahkan');
        $request->session()->flash('message_type', 'success');
        return redirect()->route('home');
    }

    public function edit($id)
    {

        return view('penempatan.edit')->with([
            'data_pendataan' => Pendataan::find($id),
            'user' => Auth::user(),
            'data_sekolah' => Sekolah::get(),
            'data_dospem' => User::get()
        ]);
    }

    public function editProcess(Request $request, $id)
    {
        Pendataan::find($id)->update([
            'user_id' => $request->input('user_id'),
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'sekolah' => $request->input('sekolah'),
            'peminatan' => $request->input('peminatan'),
            'dospem' => $request->input('dospem'),
            'pamong' => $request->input('pamong'),
            'status_koordinator' => $request->input('status_koordinator'),
            'status_pamong' => $request->input('status_pamong')
        ]);

        return redirect()->route('show.pendataan.admin');
    }

    public function delete($id)
    {
        Pendataan::destroy($id);

        return redirect()->route('show.pendataan.admin');
    }


    // ===========================================
    //           Koordinator Controller
    // ===========================================

    public function indexKoor()
    {

        return view('penempatan/koordinator.index')->with([
            'user' => Auth::user(),
            'datas' => Pendataan::get()
        ]);
    }

    public function editKoor($id)
    {

        return view('penempatan/koordinator.edit')->with([
            'data_pendataan' => Pendataan::find($id),
            'user' => Auth::user(),
            'data_sekolah' => Sekolah::get(),
            'data_dospem' => User::get()
        ]);
    }

    public function editKoorProcess(Request $request, $id)
    {
        Pendataan::find($id)->update([
            'user_id' => $request->input('user_id'),
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'sekolah' => $request->input('sekolah'),
            'peminatan' => $request->input('peminatan'),
            'dospem' => $request->input('dospem'),
            'pamong' => $request->input('pamong'),
            'status_koordinator' => $request->input('status_koordinator'),
            'status_pamong' => $request->input('status_pamong')
        ]);

        return redirect()->route('show.pendataan.koor');
    }

    // ===========================================
    //           Pamong Controller
    // ===========================================
    public function indexPamong()
    {

        return view('penempatan/pamong.index')->with([
            'user' => Auth::user(),
            'datas' => Pendataan::get()
        ]);
    }

    public function editPamong($id)
    {

        return view('penempatan/pamong.edit')->with([
            'data_pendataan' => Pendataan::find($id),
            'user' => Auth::user(),
            'data_sekolah' => Sekolah::get(),
            'data_dospem' => User::get()
        ]);
    }

    public function editPamongProcess(Request $request, $id)
    {
        Pendataan::find($id)->update([
            'user_id' => $request->input('user_id'),
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'sekolah' => $request->input('sekolah'),
            'peminatan' => $request->input('peminatan'),
            'dospem' => $request->input('dospem'),
            'pamong' => $request->input('pamong'),
            'status_koordinator' => $request->input('status_koordinator'),
            'status_pamong' => $request->input('status_pamong')
        ]);

        return redirect()->route('show.pendataan.pamong');
    }
}
