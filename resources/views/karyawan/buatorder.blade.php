@extends('karyawan.base')

@php
    date_default_timezone_set('Asia/Jakarta');
@endphp

@section('content')
    <div class="content-header">
        <span class="title-page">Buat Order</span>
        {{-- <a href="/buatorder" class="tombol-simpan me-5"><i class="fa-solid fa-plus me-2"></i>Buat Order</a> --}}
    </div>
    <a href="/order"><button class="tombol-simpan me-4 mt-3 mb-3"><i
                class="fa-solid fa-arrow-left-long me-2"></i>Kembali</button></a>
    @if (session('sukses'))
        <div class="alert alert-success mt-2">
            {{ session('sukses') }}
        </div>
    @elseif(session('gagal'))
        <div class="alert alert-danger">
            {{ session('gagal') }}
        </div>
    @endif

    <div class="content-main">
        <form action="/addorder" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <h6>Nama</h6>
                    <input type="text" class="form-control mb-3 @error('nama') is invalid @enderror" name="nama"
                        id="nama" placeholder="Nama" required>
                    @error('nama')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror

                    <h6>Nomor HP</h6>
                    <input type="text" class="form-control mb-3 @error('no_hp') is invalid @enderror" name="no_hp"
                        id="no_hp" placeholder="Nomor HP" required>
                    @error('no_hp')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror

                    <h6>Alamat</h6>
                    <textarea class="form-control mb-3 @error('alamat') is invalid @enderror" name="alamat" id="alamat"
                        placeholder="Alamat" required></textarea>
                    @error('alamat')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror

                    <h6>Berat</h6>
                    <input type="text" class="form-control mb-3 @error('berat') is invalid @enderror" onchange="hitung()"
                        name="berat" id="berat" placeholder="Berat" required>
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
                        id="harga" placeholder="Harga" required>
                    @error('harga')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror
                    <h6>Tanggal Masuk</h6>
                    <input type="date" class="form-control mb-3 @error('tanggal_masuk') is invalid @enderror"
                        name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk" required>
                    @error('tanggal_masuk')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror
                    <h6>Tanggal Jadi</h6>
                    <input type="date" class="form-control mb-3 @error('tanggal_keluar') is invalid @enderror"
                        name="tanggal_keluar" id="tanggal_keluar" placeholder="Tanggal Jadi" required>
                    @error('tanggal_keluar')
                        <div class="alert alert-danger">
                            <small>Masukkan Data dengan Benar!</small>
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="tombol-simpan">Tambahkan</button>
        </form>
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
