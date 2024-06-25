<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validasi data dan simpan ke database
        // Contoh: $namaDepan = $request->input('nama_depan');
        // ...
        // Simpan data ke database

        return redirect('/welcome');
    }

    public function welcome(Request $request)
    {
        $namaDepan = $request->input('nama_depan');
        $namaBelakang = $request->input('nama_belakang');

        return view('welcome', compact('namaDepan', 'namaBelakang'));
    }
}
