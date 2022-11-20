<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function landingpage()
    {
        return view('user.landingpage');
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

    public function dashboard(Request $request)
    {
        $data = [
            'title' => 'Dashboard MyLaundry | Karyawan'
        ];
        return view('karyawan.base', $data);
    }
}
