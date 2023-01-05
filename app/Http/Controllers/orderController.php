<?php

use Yajra\DataTables\Facades\DataTables;

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class orderController extends Controller
{
    public function order()
    {
        $data = [
            'title' => 'Pesanan MyLaundry | Karyawan',
            'order' => order::select('*')->limit(100)->get()
        ];
        // return DataTables::of($data)->make(true);
        return view('karyawan.order', $data);
    }

    // public function getOrder()
    // {

    //     
    // }
}
