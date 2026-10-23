<?php

namespace App\Http\Controllers;

use App\Models\aktivitas;   
use Illuminate\Http\Request;

class aktivitasController extends Controller
{
    public function index()
    {
        $data = aktivitas::latest()->get();
        return view('aktivitas.index', compact('data'));
    }

    public function create()
    {
        $data = aktivitas::all();
        return view('aktivitas.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'nama_aktivitas' => 'required|string|max:255',
        'deskripsi'      => 'required|string',
        'tanggal'        => 'required|date',
        'status'         => 'nullable|boolean',
        ]);

        aktivitas::create([
            'nama_aktivitas' => $request->nama_aktivitas,
            'deskripsi'      => $request->deskripsi,
            'tanggal'        => $request->tanggal,
            'status'         => $request->has('status'),
        ]);

        return redirect()->route('aktivitas')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $aktivitas = aktivitas::find($id);
        return view('aktivitas.edit', compact('aktivitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_aktivitas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'status' => 'nullable|boolean',
        ]);

        $aktivitas = Aktivitas::find($id);
        $aktivitas->update([
            'nama_aktivitas' => $request->nama_aktivitas,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'status' => $request->has('status'),
        ]);

        return redirect()->route('aktivitas')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $aktivitas = aktivitas::find($id);
        $aktivitas->delete();
        return redirect()->route('aktivitas')->with('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
        // Ambil data berdasarkan ID, jika tidak ada akan otomatis memunculkan error 404
        $aktivitas = aktivitas::find($id); 

        // Kirim variabel $aktivitas ke view 'aktivitas.show'
        return view('aktivitas.show', compact('aktivitas'));
    }

}
