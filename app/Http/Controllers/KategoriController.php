<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        // melakukan validasi data yang akan diinput
        $validasi = $request->validate([
            'nama' => 'required'
        ]);

        // menyimpan data ke dalam tabel kategori
        Kategori::create($validasi);

        // menampilkan pesan ketika data berhasil disimpan.
        return redirect()
            ->back()
            ->with('message', 'Data berhasil disimpan');
    }

    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Kategori $kategori)
    {
        // Validasi data
        $validasi = $request->validate([
            'nama' => 'required'
        ]);

        // proses update data
        $kategori->update($validasi);

        // pesan sukses
        return redirect()
            ->back()
            ->with('message', 'Data berhasil diubah');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()
            ->back()
            ->with('message', 'Data berhasil dihapus');
    }
}
