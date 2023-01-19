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
                    <th>Berat</th>
                    <th>Harga</th>
                    <th>Alamat</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $o)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $o->nama }}</td>
                        <td>{{ $o->berat }} Kg</td>
                        <td>{{ $o->alamat }}</td>
                        <td>{{ $o->harga }}</td>
                        <td>{{ date('D j F y', strtotime($o->tanggal_masuk)) }}</td>
                        <td>{{ date('D j F Y', strtotime($o->tanggal_keluar)) }}</td>
                        <td class="text-center">
                            <a href="/editorder/{{ $o->id }}" class="btn btn-sm btn-primary"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a href="https://wa.me/{{ $o->no_hp }}" class="btn btn-sm btn-success" target="_blank"
                                rel="noopener noreferrer"><i class="fa-brands fa-whatsapp"></i></a>
                            <button class="btn btn-sm btn-warning"><i class="fa-solid fa-print text-light"></i></button>
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
