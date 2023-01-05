@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Tampilan Website</span>
    </div>
    <div class="content-main">
        <form action="">
            <hr class="w-90">
            {{-- Bagian Navigasi --}}
            <div class="bagian-display">
                <div class="tampilan-option">
                    <span class="sub-tampilan">Navigasi</span>
                    <div class="d-flex align-items-center">
                        <span>Tampilkan</span>
                        <label for="navigasi" class="option-switch ms-2">
                            <input type="checkbox">
                        </label>
                    </div>
                </div>
                <div class="bagian-navigasi">
                    <div class="switch-button d-flex">
                        <h6>Upload Logo</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <div class="input-group mb-3 input-file">
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                    <div class="switch-button d-flex">
                        <h6>Nama Usaha</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <input type="text" class="form-control w-50 mb-3" name="nama-usaha" id="nama-usaha"
                        placeholder="Nama Usaha">
                </div>
            </div>

            {{-- Bagian Beranda --}}

            <hr class="w-90">
            <div class="bagian-display">
                <div class="tampilan-option">
                    <span class="sub-tampilan">Bagian Beranda</span>
                    <div class="d-flex align-items-center">
                        <span>Tampilkan</span>
                        <label for="beranda" class="option-switch ms-2">
                            <input type="checkbox">
                        </label>
                    </div>
                </div>
                <div class="bagian-beranda">
                    <div class="switch-button d-flex">
                        <h6>Judul</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <input type="text" class="form-control mb-3 w-50" name="nama-usaha" id="nama-usaha"
                        placeholder="Judul">
                    <div class="switch-button d-flex">
                        <h6>Kalimat</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <textarea class="form-control mb-3 kalimat-text" name="kalimat-beranda" id="kalimat-beranda" placeholder="Kalimat"></textarea>
                    <div class="switch-button d-flex">
                        <h6>Gambar Sampul</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <div class="input-group mb-3 input-file">
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </div>
            </div>
            <hr class="w-90">

            {{-- Bagian Mitra --}}

            <div class="bagian-display">
                <div class="tampilan-option">
                    <span class="sub-tampilan">Bagian Mitra</span>
                    <div class="d-flex align-items-center">
                        <span>Tampilkan</span>
                        <label for="mitra" class="option-switch ms-2">
                            <input type="checkbox">
                        </label>
                    </div>
                </div>
                <div class="bagian-mitra">
                    <div class="switch-button d-flex">
                        <h6>Judul</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <input type="text" class="form-control mb-3 w-50" name="nama-usaha" id="nama-usaha"
                        placeholder="Judul">
                    <div class="switch-button d-flex">
                        <h6>Kalimat</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <textarea class="form-control mb-3 kalimat-text" name="kalimat-beranda" id="kalimat-beranda" placeholder="Kalimat"></textarea>
                    <div class="switch-button d-flex">
                        <h6>Gambar</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <div class="input-group mb-3 input-file">
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </div>
            </div>
            <hr class="w-90">

            {{-- Bagian Galeri --}}

            <div class="bagian-display">
                <div class="tampilan-option">
                    <span class="sub-tampilan">Bagian Galeri</span>
                    <div class="d-flex align-items-center">
                        <span>Tampilkan</span>
                        <label for="galeri" class="option-switch ms-2">
                            <input type="checkbox">
                        </label>
                    </div>
                </div>
                <div class="bagian-galeri">
                    <div class="switch-button d-flex">
                        <h6>Judul</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <input type="text" class="form-control mb-3 w-50" name="nama-usaha" id="nama-usaha"
                        placeholder="Judul">

                    <div class="switch-button d-flex">
                        <h6>Kalimat</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <textarea class="form-control mb-3 kalimat-text" name="kalimat-beranda" id="kalimat-beranda" placeholder="Kalimat"></textarea>
                    <div class="switch-button d-flex">
                        <h6>Gambar</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <div class="input-group mb-3 input-file">
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </div>
            </div>
            <hr class="w-90">

            {{-- Bagian Kontak --}}

            <div class="bagian-display">
                <div class="tampilan-option">
                    <span class="sub-tampilan">Bagian Kontak</span>
                    <div class="d-flex align-items-center">
                        <span>Tampilkan</span>
                        <label for="kontak" class="option-switch ms-2">
                            <input type="checkbox">
                        </label>
                    </div>
                </div>

            </div>
            <hr class="w-90">

            {{-- Bagian Tentang Kami --}}

            <div class="bagian-display">
                <div class="tampilan-option">
                    <span class="sub-tampilan">Bagian Tentang Kami</span>
                    <div class="d-flex align-items-center">
                        <span>Tampilkan</span>
                        <label for="about" class="option-switch ms-2">
                            <input type="checkbox">
                        </label>
                    </div>
                </div>
                <div class="bagian-about">
                    <div class="switch-button d-flex">
                        <h6>Judul</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <input type="text" class="form-control mb-3 w-50" name="nama-usaha" id="nama-usaha"
                        placeholder="Judul">

                    <div class="switch-button d-flex">
                        <h6>Kalimat</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <textarea class="form-control mb-3 kalimat-text" name="kalimat-beranda" id="kalimat-beranda" placeholder="Kalimat"></textarea>
                </div>
            </div>
            <hr class="w-90">

            {{-- Bagian Footer --}}

            <div class="bagian-display">
                <div class="tampilan-option">
                    <span class="sub-tampilan">Bagian Footer</span>
                    <div class="d-flex align-items-center">
                        <span>Tampilkan</span>
                        <label for="footer" class="option-switch ms-2">
                            <input type="checkbox">
                        </label>
                    </div>
                </div>
                <div class="bagian-footer">
                    <div class="switch-button d-flex">
                        <h6>Judul</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <input type="text" class="form-control mb-3 w-50" name="nama-usaha" id="nama-usaha"
                        placeholder="Judul">

                    <div class="switch-button d-flex">
                        <h6>Kalimat</h6>
                        <label class="switch ms-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <textarea class="form-control mb-3 kalimat-text" name="kalimat-beranda" id="kalimat-beranda" placeholder="Kalimat"></textarea>
                </div>
            </div>
            <hr class="w-90">
            <button class="tombol-simpan">Simpan</button>
        </form>
    </div>
@endsection
