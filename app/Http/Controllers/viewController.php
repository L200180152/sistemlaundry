<?php

namespace App\Http\Controllers;

use App\Models\antrian;
use App\Models\member;
use App\Models\order;
use App\Models\setting;
use App\Models\tampilan;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function landingpage()
    {
        $data = [
            'item' => tampilan::latest()->first(),
            'items' => tampilan::count(),
            'setting' => setting::latest()->first(),
            'settings' => setting::count(),
        ];

        // dd($data);
        return view('user.landingpage', $data);
    }
    public function galeri()
    {
        $data = [
            'title' => 'Galeri'
        ];
        return view('user.galeri', $data);
    }
    public function mitra()
    {
        $data = [
            'title' => 'Mitra'
        ];
        return view('user.mitra', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Masuk MyLaundry'
        ];
        return view('auth.login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar MyLaundry'
        ];

        return view('auth.register', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard MyLaundry | Karyawan',
            'info' => setting::all()->first()
        ];
        return view('karyawan.dashboard', $data);
    }

    public function information()
    {
        $data = [
            'title' => 'Informasi MyLaundry | Karyawan',
            'info' => setting::all()->first()
        ];
        return view('karyawan.information', $data);
    }

    public function report()
    {
        $data = [
            'title' => 'Laporan MyLaundry | Karyawan',
            'order' => order::select('*')->get(),
            'info' => setting::all()->first()
        ];
        return view('karyawan.report', $data);
    }
    public function employe()
    {
        $data = [
            'title' => 'Karyawan MyLaundry | Karyawan',
            'order' => order::select('*')->get(),
            'info' => setting::all()->first()
        ];
        return view('karyawan.employe', $data);
    }
    public function member()
    {
        $data = [
            'title' => 'Member MyLaundry | Karyawan',
            'member' => member::select('*')->get(),
            'info' => setting::all()->first()
        ];
        return view('karyawan.member', $data);
    }
    public function addmember(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nohp' => 'required|numeric',
            'alamat' => 'required'

        ]);
        $member = member::create([
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);

        if ($member) {
            return redirect('/member')->with('sukses', 'Anda Berhasil Menambah Member');
        } else {
            return redirect('/member')->with('gagal', 'Anda Gagal Menambah Member');
        }
    }
    public function hapusmember(Request $request)
    {
        $hapusmember = member::where('id', $request->id)->delete();
        if ($hapusmember) {
            return redirect('/member')->with('sukses', 'Anda Berhasil Menghapus Member');
        } else {
            return redirect('/member')->with('gagal', 'Anda Gagal Menghapus Member');
        }
    }

    public function antrian()
    {
        $data = [
            'title' => 'Antrian MyLaundry | Karyawan',
            'antrian' => antrian::join('detailorders', 'detailorders.antrian_id', '=', 'antrians.id')->get(),
            'info' => setting::all()->first()
        ];

        return view('karyawan.antrian', $data);
    }
}
