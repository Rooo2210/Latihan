<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // tampilkan halaman contact.blade.php
    }

    public function send(Request $request)
    {
        // validasi data
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // contoh: kirim email / simpan ke database
        // tapi sementara kita tampilkan pesan sukses dulu
        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
