@extends('karyawan.base')
@php
    function rupiah($angka)
    {
        $hasil_rupiah = 'Rp ' . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }
@endphp
@section('content')
    <div class="content-header">
        <span class="title-page">Dashboard</span>
        {{-- <button class="tombol-simpan me-5"><i class="fa-solid fa-plus me-2"></i>Buat Order</button> --}}
    </div>
    <div class="content-main">
        <div class="main-header">
            <div class="row">
                <div class="col-md-3">
                    <div class="info-rekap">
                        <div class="konten-rekap">
                            <div class="color-rekap">
                            </div>
                            <div class="rekap-description">
                                <div class="description-list">
                                    <span>Jumlah Order</span><br>
                                    <span style="font-size: 25px">56</span>
                                </div>
                                <div class="description-more">
                                    <a href="#" class="badge badge-descrption badge-sm">Info Lanjut<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="img-description">
                                <span><i class="fa-solid fa-file-invoice"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-rekap mt-2">
                        <div class="konten-rekap">
                            <div class="color-rekap bg-primary">
                            </div>
                            <div class="rekap-description">
                                <div class="description-list">
                                    <span>Jumlah karyawan</span><br>
                                    <span style="font-size: 25px">4</span>
                                </div>
                                <div class="description-more">
                                    <a href="#" class="badge badge-descrption badge-sm">Info Lanjut<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="img-description">
                                <span><i class="fa-solid fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-rekap">
                        <div class="konten-rekap">
                            <div class="color-rekap bg-warning">
                            </div>
                            <div class="rekap-description">
                                <div class="description-list">
                                    <span>Informasi</span><br>
                                    <span style="font-size: 25px;">56</span>
                                </div>
                                <div class="description-more">
                                    <a href="#" class="badge badge-descrption badge-sm">Info Lanjut<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="img-description">
                                <span><i class="fa-solid fa-circle-info"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-rekap">
                        <div class="konten-rekap">
                            <div class="color-rekap bg-success">
                            </div>
                            <div class="rekap-description">
                                <div class="description-list">
                                    <span>Laporan</span><br>
                                    <span style="font-size: 25px">30</span>
                                </div>
                                <div class="description-more">
                                    <a href="#" class="badge badge-descrption badge-sm">Info Lanjut<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="img-description">
                                <span><i class="fa-solid fa-chart-simple"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="w-90">
        <div class="main-dashboard">
            <div class="informasi-toko">
                <h2>Informasi Toko</h2>
                <form action="">
                    <span>Nama</span>
                    <div class="form-floating mt-2 mb-3">
                        <input type="text" class="form-control w-75" name="nama-laundry" id="nama-laundry"
                            placeholder="Nama">
                        <label for="nama-laundry" class="text-secondary ">Nama</label>
                    </div>
                    <span>Nomor Telepon</span>
                    <div class="form-floating mt-2 mb-3">
                        <input type="text" class="form-control w-75" name="nomorhp-laundry" id="nomorhp-laundry"
                            placeholder="Nama">
                        <label for="nomorhp-laundry" class="text-secondary ">Nomor Telepon</label>
                    </div>
                    <span>Alamat</span>
                    <div class="form-floating mt-2 mb-3">
                        <textarea class="form-control w-75" name="alamat-laundry" id="alamat-laundry" placeholder="Alamat"
                            style="min-height: 180px;"></textarea>
                        <label for="alamat-laundry" class="text-secondary ">Alamat</label>
                    </div>
                    <button class="tombol-simpan">Simpan</button>
                </form>
            </div>
            <div class="penghasilan-toko">
                <h2>Penghasilan Toko</h2>
                <div class="info-rekap w-75">
                    <div class="konten-rekap">
                        <div class="color-rekap bg-primary">
                        </div>
                        <div class="rekap-description w-75">
                            <div class="description-list">
                                <span>Pemasukan</span><br>
                                <span style="font-size: 30px;">{{ rupiah(50000000) }}</span>
                            </div>
                            <div class="description-more w-50">
                                <a href="#" class="badge badge-descrption badge-sm">Info Lanjut<i
                                        class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="img-description">
                            <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="info-rekap w-75">
                    <div class="konten-rekap">
                        <div class="color-rekap bg-danger">
                        </div>
                        <div class="rekap-description w-75">
                            <div class="description-list">
                                <span>Pengeluaran</span><br>
                                <span style="font-size: 30px;">{{ rupiah(500000) }}</span>
                            </div>
                            <div class="description-more w-50">
                                <a href="#" class="badge badge-descrption badge-sm">Info Lanjut<i
                                        class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="img-description">
                            <span><i class="fa-solid fa-money-bill-trend-up"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
