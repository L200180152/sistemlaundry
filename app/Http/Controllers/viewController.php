<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function landingpage()
    {
        return view('user.landingpage');
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
            'title' => 'Dashboard MyLaundry | Karyawan'
        ];
        return view('karyawan.dashboard', $data);
    }

    public function information()
    {
        $data = [
            'title' => 'Informasi MyLaundry | Karyawan'
        ];
        return view('karyawan.information', $data);
    }

    public function tampilan()
    {
        $data = [
            'title' => 'Tampilan MyLaundry | Karyawan'
        ];
        return view('karyawan.tampilan', $data);
    }

    public function report()
    {
        $data = [
            'title' => 'Laporan MyLaundry | Karyawan'
        ];
        return view('karyawan.report', $data);
    }
    public function employe()
    {
        $data = [
            'title' => 'Karyawan MyLaundry | Karyawan'
        ];
        return view('karyawan.employe', $data);
    }
}
