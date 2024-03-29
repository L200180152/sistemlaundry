@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Informasi</span>
    </div>
    <div class="content-main">
        <form action="/simpaninformasi" method="POST">
            @csrf
            <span>Nama Laundry</span>
            <div class="form-floating mt-2 mb-3">
                <input type="text" class="form-control w-75" name="nama-laundry" id="nama-laundry"
                    value="{{ $info->namatoko }}" placeholder="Nama">
                <label for="nama-laundry" class="text-secondary ">Nama</label>
            </div>
            <span>Nomor Telepon</span>
            <div class="form-floating mt-2 mb-3">
                <input type="text" class="form-control w-75" name="nomorhp-laundry" id="nomorhp-laundry"
                    placeholder="Nama" value="{{ $info->no_hp }}">
                <label for="nomorhp-laundry" class="text-secondary ">Nomor Telepon</label>
            </div>
            <span>Alamat</span>
            <div class="form-floating mt-2 mb-3">
                <textarea class="form-control w-75" name="alamat-laundry" id="alamat-laundry" placeholder="Alamat"
                    style="min-height: 180px;">{{ $info->alamat }}</textarea>
                <label for="alamat-laundry" class="text-secondary ">Alamat</label>
            </div>
            <button class="tombol-simpan">Simpan</button>
        </form>
    </div>
@endsection
