<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        // $datas = User::get();
        return view('user.index')->with([
            'user' => Auth::user(),
            'datas' => User::get()
        ]);
    }


    public function create()
    {
        return view('user.addUser')->with([
            'user' => Auth::user()
        ]);
    }

    public function addProcess(Request $request)
    {
        // Cek Username
        $count = User::where('username', $request->input('username'))->exists();

        if ($count > 0) {
            // echo '<script language="javascript">';
            // echo 'alert("Username telah terdaftar")';
            // echo '</script>';
            return redirect('admin/showPengguna')->with('status', 'Username telah terdaftar');
        }

        // Proses penambahan
        User::create([
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'level' => $request->input('level'),
            'password' => bcrypt(($request->input('password')))
        ]);

        $request->session()->flash('message', 'Berhasil Ditambahkan');
        $request->session()->flash('message_type', 'success');
        return redirect()->route('show.user');
    }

    // Menampilkan halaman edit
    public function edit($id)
    {
        $data = User::find($id);
        $user = Auth::user();

        return view('user.editUser')->with([
            'data' => User::find($id),
            'user' => Auth::user()
        ]);
    }

    // Proses Edit
    public function editProcess(Request $request, $id)
    {
        User::find($id)->update([
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'level' => $request->input('level'),
            'passworo' => bcrypt(($request->input('password')))
        ]);

        return redirect()->route('show.user');
    }

    // Delete User
    public function delete($id)
    {
        User::destroy($id);

        return redirect()->route('show.user');
    }
}
