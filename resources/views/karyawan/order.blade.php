@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Pesanan</span>
        <button class="tombol-simpan me-5"><i class="fa-solid fa-plus me-2"></i>Buat Order</button>
    </div>
    <div class="content-main">
        <table id="table-order" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama </th>
                    <th>Berat</th>
                    <th>Alamat</th>
                    <th>No HP </th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $order)
                    <tr>
                        <td></td>
                        <td>{{ $order->nama }}</td>
                        <td>{{ $order->berat }} Kg</td>
                        <td>{{ $order->alamat }}</td>
                        <td>{{ $order->no_hp }}</td>
                        <td>{{ $order->tanggal_masuk }}</td>
                        <td>{{ $order->tanggal_keluar }}</td>
                        <td class="text-center"><button class="btn btn-sm btn-danger"><i
                                    class="fa-solid text-center fa-trash"></i></button>
                            <button class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
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
            $('#datatables').DataTable({
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "buttons": [
                    'colvis',
                    'copyHtml5',
                    'csvHtml5',
                    'excelHtml5',
                    'pdfHtml5',
                    'print'
                ]
            });
        });

        $(document).ready(function() {
            $('#table-order').DataTable();
        });
    </script>
@endsection
