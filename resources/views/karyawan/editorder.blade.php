@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Edit Order</span>
        {{-- <a href="/buatorder" class="tombol-simpan me-5"><i class="fa-solid fa-plus me-2"></i>Buat Order</a> --}}
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
        <form action="/editorder/save" method="POST">
            @csrf
            <div class="row">
                @foreach ($order as $o)
                    <input type="hidden" name="id" value="{{ $o->id }}">
                    <div class="col">
                        <h6>Nama</h6>
                        <input type="text" class="form-control mb-3 @error('nama') is invalid @enderror" name="nama"
                            id="nama" placeholder="Nama" value="{{ $o->nama }}" required>
                        @error('nama')
                            <div class="alert alert-danger">
                                <small>Masukkan Data dengan Benar!</small>
                            </div>
                        @enderror
                        <h6>Nomor HP</h6>
                        <input type="text" class="form-control mb-3 @error('no_hp') is invalid @enderror" name="no_hp"
                            id="no_hp" placeholder="Nomor HP" value="{{ $o->no_hp }}" required>
                        @error('no_hp')
                            <div class="alert alert-danger">
                                <small>Masukkan Data dengan Benar!</small>
                            </div>
                        @enderror
                        <h6>Alamat</h6>
                        <textarea class="form-control mb-3 @error('alamat') is invalid @enderror" name="alamat" id="alamat"
                            placeholder="Alamat" required>{{ $o->alamat }}</textarea>
                        @error('alamat')
                            <div class="alert alert-danger">
                                <small>Masukkan Data dengan Benar!</small>
                            </div>
                        @enderror
                        <h6>Berat</h6>
                        <input type="text" class="form-control mb-3 @error('berat') is invalid @enderror" name="berat"
                            id="berat" placeholder="Berat" value="{{ $o->berat }}" required>
                        @error('berat')
                            <div class="alert alert-danger">
                                <small>Masukkan Data dengan Benar!</small>
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <h6>Paket Laundry</h6>
                        <select class="form-control mb-3 @error('paket_laundry') is invalid @enderror" name="paket_laundry"
                            id="paket_laundry" onchange="hitung()">
                            <option value="{{ $o->paket_laundry }}" selected>{{ $o->paket_laundry }}</option>
                            <option value="paket1">Cuci Kering Setrika</option>
                            <option value="paket2">Cuci Kering / Setrika Saja</option>
                        </select>
                        @error('paket_laundry')
                            <div class="alert alert-danger">
                                <small>Masukkan Data dengan Benar!</small>
                            </div>
                        @enderror
                        <h6>Harga</h6>
                        <input type="text" class="form-control mb-3 @error('harga') is invalid @enderror" name="harga"
                            id="harga" placeholder="Harga" value="{{ $o->harga }}" required>
                        @error('harga')
                            <div class="alert alert-danger">
                                <small>Masukkan Data dengan Benar!</small>
                            </div>
                        @enderror
                        <h6>Tanggal Masuk</h6>
                        <input type="date" class="form-control mb-3 @error('tanggal_masuk') is invalid @enderror"
                            name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk"
                            value="{{ $o->tanggal_masuk }}" required>
                        @error('tanggal_masuk')
                            <div class="alert alert-danger">
                                <small>Masukkan Data dengan Benar!</small>
                            </div>
                        @enderror
                        <h6>Tanggal Jadi</h6>
                        <input type="date" class="form-control mb-3 @error('tanggal_keluar') is invalid @enderror"
                            name="tanggal_keluar" id="tanggal_keluar" placeholder="Tanggal Jadi"
                            value="{{ $o->tanggal_keluar }}" required>
                        @error('tanggal_keluar')
                            <div class="alert alert-danger">
                                <small>Masukkan Data dengan Benar!</small>
                            </div>
                        @enderror
                    </div>
                @endforeach

            </div>
            <button type="submit" class="tombol-simpan">Simpan</button>
            <button type="button" class="tombol-merah" data-bs-toggle="modal"
                data-bs-target="#hapusorder{{ $o->id }}">Hapus</button>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="hapusorder{{ $o->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Ingin Menghapus Order Ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="tombol-simpan" data-bs-dismiss="modal">Tutup</button>
                        <form action="/hapusorder" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $o->id }}">
                            <button type="submit" class="tombol-merah">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function hitung() {
            let paketlaundry = $('#paket_laundry option:selected').val();
            let berat = $('#berat').val();
            if (paketlaundry == 'paket1') {
                let hasil = berat * 4000;
                $('#harga').val(hasil);
            } else {
                let hasil = berat * 3000;
                $('#harga').val(hasil);
            }
        }
    </script>
@endsection
