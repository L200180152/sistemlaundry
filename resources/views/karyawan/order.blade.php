@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Pesanan</span>
        <div>
            <button class="tombol-simpan" data-bs-toggle="modal" data-bs-target="#modalfilter"><i
                    class="fas fa-filter me-2"></i>Filter Tanggal</button>

            {{-- Modal Filter --}}
            <div class="modal fade" id="modalfilter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Filter Tanggal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Tanggal Awal:</h6>
                            <input type="date" class="form-control" name="tgl_awal">
                            <h6>Tanggal Akhir:</h6>
                            <input type="date" class="form-control" name="tgl_akhir">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="tombol-merah" data-bs-dismiss="modal">Kembali</button>
                            <button type="button" class="tombol-simpan">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/buatorder"><button class="tombol-biru me-4"><i class="fa-solid fa-plus me-2"></i>Buat
                    Order</button></a>
        </div>
    </div>

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
                            <a href="/editorder/{{ $o->id }}" class="btn btn-sm btn-success"><i
                                    class="fa-solid fa-whatsapp"></i></a>
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
