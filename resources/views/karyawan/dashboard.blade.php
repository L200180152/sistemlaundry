@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Dashboard</span>
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
    </div>
@endsection
