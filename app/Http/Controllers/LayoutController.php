<?php

namespace App\Http\Controllers;

use App\Pendataan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    public function index()
    {
        return view('home')->with([
            'user' => Auth::user(),
            'data_penempatan' => Pendataan::get()
        ]);
    }
}
