<?php

use Yajra\DataTables\Facades\DataTables;

namespace App\Http\Controllers;

use App\Models\antrian;
use App\Models\detailorder;
use App\Models\kategori;
use App\Models\member;
use App\Models\order;
use App\Models\setting;
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
            'order' => order::select('*')->latest()->get(),
            'info' => setting::all()->first()
        ];
        return view('karyawan.order', $data);
    }

    public function buatorder()
    {
        $data = [
            'title' => 'Buat Order | MyLaundry',
            'info' => setting::all()->first(),
            'member' => member::all(),
            'kategori' => kategori::all()
        ];

        return view('karyawan.buatorder', $data);
    }

    public function editorder($id)
    {
        $data = [
            'title' => 'Edit Order | MyLaundry',
            'order' => order::where('id', $id)->get(),
            'info' => setting::all()->first(),
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
            'invoice' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'qty' => 'required|max:255',
            'alamat' => 'required',
            'subtotal' => 'required',
            'totalharga' => 'required',
            'paket' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
        ]);

        // dd($request);
        $antrian = antrian::create([
            'nama' => $request->nama,
            'invoice_id' => $request->invoice,
            'nohp' => $request->no_hp,
            'alamat' => $request->alamat,
            'totalharga' => $request->totalharga,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar,
        ]);
        // $paket = count($request->paket);

        foreach ($request->paket as $paket => $pkt) {
            detailorder::create([
                'antrian_id' => $antrian->id,
                'paket' => $pkt,
                'qty' => $request->qty[$paket],
                'harga' => $request->subtotal[$paket]
            ]);
        }

        return response()->json(['success' => 'Berhasil di Tambahkan']);
    }
}
