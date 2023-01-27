@extends('karyawan.base')
<style>
    .dataTables_filter {
        display: none;
    }

    .dataTables_length {
        display: none;
    }

    .dataTables_paginate {
        display: none;
    }

    .dataTables_info {
        display: none;
    }
</style>
@section('content')
    <div class="content-header">
        <span class="title-page">Kategori</span>
    </div>

    @if (session('sukses'))
        <div class="alert alert-success mt-2 w-50">
            <small>{{ session('sukses') }}</small>
        </div>
    @elseif(session('gagal'))
        <div class="alert alert-danger mt-2 w-50">
            <small>{{ session('gagal') }}</small>
        </div>
    @endif

    <div class="content-main">
        <div class="row">
            <div class="col">
                <h6>Paket Utama</h6>
                <table id="table-kategori" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Deskripsi</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori->where('tipe', 'paket utama') as $k)
                            <input type="hidden" value="{{ $k->id }}" id="id_kat">
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->nama }}</td>
                                <td>{{ $k->deskripsi }}</td>
                                <td>{{ $k->satuan }}</td>
                                <td>Rp. {{ $k->harga }}</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm mb-2" id="editkategori"
                                        onclick="getID({{ $k->id }})"><i
                                            class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#hapuskategori{{ $k->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="hapuskategori{{ $k->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="/hapuskategori/{{ $k->id }}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda Yakin ingin Menghapus Kategori Ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="tombol-biru"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="tombol-merah">hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <h6>Item</h6>
                <table id="table-item" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Deskripsi</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori->where('tipe', 'item') as $k)
                            <input type="hidden" value="{{ $k->id }}" id="id_kat">
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->nama }}</td>
                                <td>{{ $k->deskripsi }}</td>
                                <td>{{ $k->satuan }}</td>
                                <td>Rp. {{ $k->harga }}</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm mb-2" id="editkategori"
                                        onclick="getID({{ $k->id }})"><i
                                            class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#hapuskategori{{ $k->id }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="hapuskategori{{ $k->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="/hapuskategori/{{ $k->id }}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda Yakin ingin Menghapus Kategori Ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="tombol-biru"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="tombol-merah">hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col">
                <form action="/addkategori" method="POST" id="formkategori">
                    @csrf
                    <h6>Nama</h6>
                    <input type="text" class="form-control mb-2 @error('nama') is invalid @enderror" name="nama"
                        id="nama">
                    @error('nama')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror
                    <h6>Deskripsi</h6>
                    <textarea class="form-control mb-2 @error('deskripsi') is invalid @enderror" name="deskripsi" id="deskripsi"></textarea>
                    @error('deskripsi')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror
                    <h6>Satuan</h6>
                    <select class="form-control mb-2" name="satuan" id="satuan">
                        <option value="">Pilih Satuan..</option>
                        <option value="kg">Kilogram</option>
                        <option value="pcs">Pcs</option>
                    </select>
                    @error('satuan')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror
                    <h6>Harga</h6>
                    <input type="text" class="form-control mb-2 @error('harga') is invalid @enderror" name="harga"
                        id="harga">
                    @error('harga')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror
                    <input type="hidden" name="tipe" id="tipe" value="paket utama">
                    <div class="tombol-kategori d-flex">
                        <button type="submit" class="tombol-simpan mt-3 me-2" id="tambahkategori">Tambah
                            Paket Utama</button>
                        <button type="submit" class="tombol-biru mt-3 me-2" id="tambahitem">Tambah
                            Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table-kategori').DataTable();
            $('#table-item').DataTable();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#tambahitem').click(function() {
            $('#tipe').val('item')
        });

        function getID(params) {
            console.log(params);
            $.get('/geteditkategori', {
                id_kategori: params
            }, function(response) {
                $('#nama').val(response[0].nama);
                $('#deskripsi').val(response[0].deskripsi);
                $('#satuan').val(response[0].satuan);
                $('#harga').val(response[0].harga);

                $('#tambahkategori').text("Simpan");
                $('.tombol-kategori').append("<a href='/kategori' class='tombol-merah mt-3'>Reset</a>");
                $('#formkategori').attr('action', '/editkategori');
            });
        }
    </script>
@endsection
