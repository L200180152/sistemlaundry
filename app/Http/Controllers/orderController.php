<?php

use Yajra\DataTables\Facades\DataTables;

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class orderController extends Controller
{
    public function order()
    {
        $data = [
            'title' => 'Pesanan MyLaundry | Karyawan',
            'order' => order::select('*')->latest()->get()
            // 'order' => order::select('*')->limit(100)->get()
        ];
        // return DataTables::of($data)->make(true);
        return view('karyawan.order', $data);
    }

    public function buatorder()
    {
        $data = [
            'title' => 'Buat Order | MyLaundry',
        ];

        return view('karyawan.buatorder', $data);
    }

    public function editorder($id)
    {
        $data = [
            'title' => 'Edit Order | MyLaundry',
            'order' => order::where('id', $id)->get()
        ];

        return view('karyawan.editorder', $data);
    }

    public function filtertanggal(Request $request)
    {

        $data = [
            'title' => 'Pesanan MyLaundry | Karyawan',
            'order' => order::whereDate('tanggal_masuk', '>=', $request->tgl_awal)
                ->whereDate('tanggal_masuk', '<=', $request->tgl_akhir)->get()
        ];
        // dd($data);

        return view('karyawan.orderfilter', $data);
    }

    public function editordersave(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'berat' => 'required|max:255|numeric',
            'alamat' => 'required',
            'harga' => 'required',
            'paket_laundry' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
        ]);

        $editorder = order::where('id', $request->id)->update([
            'nama' => $request->nama,
            'berat' => $request->berat,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'paket_laundry' => $request->paket_laundry,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar,
        ]);

        if ($editorder) {
            return redirect('/order')->with('sukses', 'Berhasil Menambahkan');
        } else {
            return redirect('/order')->with('gagal', 'Gagal Menambahkan');
        }
    }

    public function hapusorder(Request $request)
    {
        $hapusorder = order::where('id', $request->id)->delete();
        // dd($request->id);
        if ($hapusorder) {
            return redirect('/order')->with('sukses', 'Berhasil Menghapus');
        } else {
            return redirect('./editorder/' . $request->id)->with('gagal', 'Gagal Menghapus');
        }
    }

    public function addorder(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'berat' => 'required|max:255|numeric',
            'alamat' => 'required',
            'harga' => 'required',
            'paket_laundry' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
        ]);

        $addorder = order::create([
            'nama' => $request->nama,
            'berat' => $request->berat,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'paket_laundry' => $request->paket_laundry,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar,
        ]);

        if ($addorder) {
            return redirect('/buatorder')->with('sukses', 'Berhasil Menambahkan');
        } else {
            return redirect('/buatorder')->with('gagal', 'Gagal Menambahkan');
        }
    }
}
