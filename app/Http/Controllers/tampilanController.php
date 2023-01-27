<?php

namespace App\Http\Controllers;

use App\Models\setting;
use App\Models\tampilan;
use Illuminate\Http\Request;

class tampilanController extends Controller
{
    public function tampilan()
    {
        $data = [
            'title' => 'Tampilan MyLaundry | Karyawan',
            'info' => setting::all()->first(),
            'items' => tampilan::count(),
            'item' => tampilan::latest()->first()
        ];

        // dd($data);
        return view('karyawan.tampilan', $data);
    }

    public function addtampilan(Request $request)
    {

        $this->validate($request, [
            'beranda_gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'mitra_gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'galeri_gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'kontak_gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
        ]);

        // Upload Gambar
        $beranda_gambar = $request->file('beranda_gambar');
        $mitra_gambar = $request->file('mitra_gambar');
        $galeri_gambar = $request->file('galeri_gambar');
        $kontak_gambar = $request->file('kontak_gambar');

        // Store or No
        $beranda_gambar != null ? $beranda_gambar->storeAs('public/img/beranda', $beranda_gambar->hashName()) : null;
        $mitra_gambar != null ? $mitra_gambar->storeAs('public/img/mitra', $mitra_gambar->hashName()) : null;
        $galeri_gambar != null ? $galeri_gambar->storeAs('public/img/galeri', $galeri_gambar->hashName()) : null;
        $kontak_gambar != null ? $kontak_gambar->storeAs('public/img/kontak', $kontak_gambar->hashName()) : null;

        $addtampilan = tampilan::create([
            'beranda_judul' => $request->beranda_judul,
            'beranda_kalimat' => $request->beranda_kalimat,
            'beranda_gambar' => $beranda_gambar != null ? $beranda_gambar->hashName() : null,
            'mitra_judul' => $request->mitra_judul,
            'mitra_kalimat' => $request->mitra_kalimat,
            'mitra_gambar' => $mitra_gambar != null ? $mitra_gambar->hashName() : null,
            'galeri_judul' => $request->galeri_judul,
            'galeri_kalimat' => $request->galeri_kalimat,
            'galeri_gambar' => $mitra_gambar != null ? $mitra_gambar->hashName() : null,
            'kontak_judul' => $request->kontak_judul,
            'kontak_gambar' => $kontak_gambar != null ? $kontak_gambar->hashName() : null,
            'tentang_judul' => $request->tentang_judul,
            'tentang_kalimat' => $request->tentang_kalimat,
            'jdl_beranda_color' => $request->jdl_beranda_color,
            'klmt_beranda_color' => $request->klmt_beranda_color,
            'jdl_mitra_color' => $request->jdl_mitra_color,
            'klmt_mitra_color' => $request->klmt_mitra_color,
            'jdl_galeri_color' => $request->jdl_galeri_color,
            'klmt_galeri_color' => $request->klmt_galeri_color,
            'jdl_kontak_color' => $request->jdl_kontak_color,
            'klmt_kontak_color' => $request->klmt_kontak_color,
            'kontak_kalimat' => $request->kontak_kalimat,
            'jdl_tentang_color' => $request->jdl_tentang_color,
            'klmt_tentang_color' => $request->klmt_tentang_color,
            'bg_tentang_color' => $request->bg_tentang_color,
        ]);

        if ($addtampilan) {
            return redirect('/tampilan')->with('sukses', 'Data Berhasil di Tambah');
        } else {
            return redirect('/tampilan')->with('gagal', 'Data Gagal di Tambah');
        }
    }
    public function updatetampilan(Request $request)
    {

        $this->validate($request, [
            'beranda_gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'mitra_gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'galeri_gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'kontak_gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5000',
        ]);


        // Upload Gambar
        $beranda_gambar = $request->file('beranda_gambar');
        $mitra_gambar = $request->file('mitra_gambar');
        $galeri_gambar = $request->file('galeri_gambar');
        $kontak_gambar = $request->file('kontak_gambar');
        // $old_img_beranda = $request->old_img_beranda;

        // Store or No
        $beranda_gambar != null ? $beranda_gambar->storeAs('public/img/beranda', $beranda_gambar->hashName()) : null;
        $mitra_gambar != null ? $mitra_gambar->storeAs('public/img/mitra', $mitra_gambar->hashName()) : null;
        $galeri_gambar != null ? $galeri_gambar->storeAs('public/img/galeri', $galeri_gambar->hashName()) : null;
        $kontak_gambar != null ? $kontak_gambar->storeAs('public/img/kontak', $kontak_gambar->hashName()) : null;

        $updatetampilan = tampilan::where('id', $request->id)->update([
            'beranda_judul' => $request->beranda_judul,
            'beranda_kalimat' => $request->beranda_kalimat,
            'beranda_gambar' => $beranda_gambar != null ? $beranda_gambar->hashName() : ($request->old_img_beranda != null ? $request->old_img_beranda : null),
            'mitra_judul' => $request->mitra_judul,
            'mitra_kalimat' => $request->mitra_kalimat,
            'mitra_gambar' => $mitra_gambar != null ? $mitra_gambar->hashName() : ($request->old_img_mitra != null ? $request->old_img_mitra : null),
            'galeri_judul' => $request->galeri_judul,
            'galeri_kalimat' => $request->galeri_kalimat,
            'galeri_gambar' => $galeri_gambar != null ? $galeri_gambar->hashName() : ($request->old_img_galeri != null ? $request->old_img_galeri : null),
            'kontak_judul' => $request->kontak_judul,
            'kontak_kalimat' => $request->kontak_kalimat,
            'kontak_gambar' => $kontak_gambar != null ? $kontak_gambar->hashName() : ($request->old_img_kontak != null ? $request->old_img_kontak : null),
            'tentang_judul' => $request->tentang_judul,
            'tentang_kalimat' => $request->tentang_kalimat,
            'jdl_beranda_color' => $request->jdl_beranda_color,
            'klmt_beranda_color' => $request->klmt_beranda_color,
            'jdl_mitra_color' => $request->jdl_mitra_color,
            'klmt_mitra_color' => $request->klmt_mitra_color,
            'jdl_galeri_color' => $request->jdl_galeri_color,
            'klmt_galeri_color' => $request->klmt_galeri_color,
            'jdl_kontak_color' => $request->jdl_kontak_color,
            'klmt_kontak_color' => $request->klmt_kontak_color,
            'kontak_kalimat' => $request->kontak_kalimat,
            'jdl_tentang_color' => $request->jdl_tentang_color,
            'klmt_tentang_color' => $request->klmt_tentang_color,
            'bg_tentang_color' => $request->bg_tentang_color,
        ]);

        if ($updatetampilan) {
            return redirect('/tampilan')->with('sukses', 'Data Berhasil di Update');
        } else {
            return redirect('/tampilan')->with('gagal', 'Data Gagal di Update');
        }
    }

    public function resettampilan(Request $request)
    {
        $reset = tampilan::where('id', $request->id)->delete();
        if ($reset) {
            return redirect('/tampilan')->with('sukses', 'Data Berhasil di Reset');
        } else {
            return redirect('/tampilan')->with('gagal', 'Data Gagal di Reset');
        }
    }
}
