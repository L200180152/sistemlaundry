<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\setting;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function kategori()
    {
        $data = [
            'title' => 'Kategori MyLaundry | Karyawan',
            'kategori' => kategori::all(),
            'info' => setting::all()->first()
        ];
        return view('karyawan.kategori', $data);
    }

    public function hapuskategori($id)
    {
        // dd($id);
        $hapuskategori = kategori::where('id', $id)->delete();
        if ($hapuskategori) {
            return redirect('/kategori')->with('sukses', 'Data Berhasil di Hapus');
        } else {
            return redirect('/kategori')->with('gagal', 'Data Gagal di Hapus');
        }
    }

    public function geteditkategori(Request $request)
    {
        $data = kategori::where('id', $request->id_kategori)->get();
        // dd($data);
        return response()->json($data);
    }

    public function editkategori(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'satuan' => 'required',
            'harga' => 'required|numeric'
        ]);

        $editkategori = kategori::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
        ]);

        if ($editkategori) {
            return redirect('/kategori')->with('sukses', 'Tambah Kategori Berhasil');
        } else {
            return redirect('/kategori')->with('gagal', 'Tambah Kategori Gagal');
        }
    }

    public function addkategori(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'satuan' => 'required',
            'harga' => 'required|numeric'
        ]);

        $addkategori = kategori::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'tipe' => $request->tipe
        ]);

        if ($addkategori) {
            return redirect('/kategori')->with('sukses', 'Tambah Kategori Berhasil');
        } else {
            return redirect('/kategori')->with('gagal', 'Tambah Kategori Gagal');
        }
    }
}
