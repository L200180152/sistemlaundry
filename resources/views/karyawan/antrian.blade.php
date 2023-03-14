@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Pesanan</span>
        <div>
            <a href="/buatorder"><button class="tombol-biru me-4"><i class="fa-solid fa-plus me-2"></i>Buat
                    Order</button></a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('gagal'))
        <div class="alert alert-danger">
            {{ session('gagal') }}
        </div>
    @endif

    <div class="content-main">
        <table id="table-order" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama </th>
                    <th>Detail</th>
                    <th>In</th>
                    <th>Out</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($antrian as $o)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $o->nama }}</td>
                        <td class="text-center"><button class="btn btn-sm btn-primary" style="font-size:10px;"
                                data-bs-toggle="modal" data-bs-target="#detail{{ $o->id }}">Lihat
                                Detail</button>
                            <div class="modal fade" id="detail{{ $o->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Masukkan Nilai</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="">
                                                <h6>Nama</h6>
                                                <h6>{{ $o->nama }}</h6>
                                                <h6>Detail</h6>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Paket</th>
                                                            <th>Qty</th>
                                                            <th>SubTotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $o->paket }}</td>
                                                            <td>{{ $o->qty }}</td>
                                                            <td>{{ $o->harga }}</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3" class="text-end">Total</td>
                                                            <td colspan="3" class="text-center">{{ $o->totalharga }}
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="tombol-biru"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="button" class="tombol-simpan"
                                                data-bs-dismiss="modal">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>{{ date('D j F y', strtotime($o->tanggal_masuk)) }}</td>
                        <td>{{ date('D j F y', strtotime($o->tanggal_keluar)) }}</td>
                        <td class="text-center">
                            <a href="/editorder/{{ $o->id }}" class="btn btn-sm btn-primary"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <button class="btn btn-sm btn-success"><i class="fa-solid fa-jug-detergent"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-order').DataTable();
        });
    </script>
@endsection
