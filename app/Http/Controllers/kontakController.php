<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        // TODO: proses pesan (simpan ke DB, kirim email, dsb.)

        return redirect()->route('kontak')->with('sukses', 'Pesan berhasil dikirim!');
    }

    public function hubungi()
    {
        return view('hubungi');
    }

}
