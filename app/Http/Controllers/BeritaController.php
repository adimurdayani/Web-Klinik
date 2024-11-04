<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        // melakukan validasi data yang akan diinput
        $validasi = $request->validate([
            'nama' => 'required'
        ]);

        // menyimpan data ke dalam tabel berita
        Berita::create($validasi);

        // menampilkan pesan ketika data berhasil disimpan.
        return redirect()
            ->back()
            ->with('message', 'Data berhasil disimpan');
    }

    public function edit(Berita $berita)
    {
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        // Validasi data
        $validasi = $request->validate([
            'nama' => 'required'
        ]);

        // proses update data
        $berita->update($validasi);

        // pesan sukses
        return redirect()
            ->back()
            ->with('message', 'Data berhasil diubah');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()
            ->back()
            ->with('message', 'Data berhasil dihapus');
    }
}
