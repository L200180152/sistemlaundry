<form action="/addtampilan" method="POST" enctype="multipart/form-data">
    @csrf
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
            <h6>Judul</h6>
            <div class="d-flex">
                <input type="text" class="form-control me-2 mb-3 w-50" name="beranda_judul" id="beranda_judul"
                    placeholder="Judul" value="">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="jdl_beranda_color"
                        id="jdl_beranda_color">
                </div>
            </div>
            <h6>Kalimat</h6>
            <div class="d-flex">
                <textarea class="form-control me-2 mb-3 kalimat-text" name="beranda_kalimat" id="beranda_kalimat" placeholder="Kalimat"></textarea>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="klmt_beranda_color"
                        id="klmt_beranda_color" value="">
                </div>
            </div>
            <h6>Gambar Sampul</h6>
            <div class="input-group mb-3 input-file">
                <input type="file" class="form-control @error('beranda_gambar') is invalid @enderror"
                    name="beranda_gambar" id="beranda_gambar">
            </div>
            @error('beranda_gambar')
                <div class="alert alert-danger">
                    <small>Masukkan Data dengan Benar!</small>
                </div>
            @enderror
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
            <h6>Judul</h6>
            <div class="d-flex">
                <input type="text" class="form-control me-2 mb-3 w-50" name="mitra_judul" id="mitra_judul"
                    placeholder="Judul">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="jdl_mitra_color" id="jdl_mitra_color"
                        value="">
                </div>
            </div>
            <h6>Kalimat</h6>
            <div class="d-flex">
                <textarea class="form-control me-2 mb-3 kalimat-text" name="mitra_kalimat" id="mitra_kalimat" placeholder="Kalimat"></textarea>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="klmt_mitra_color" id="klmt_mitra_color"
                        value="">
                </div>
            </div>
            <h6>Gambar</h6>
            <div class="input-group mb-3 input-file">
                <input type="file" class="form-control @error('mitra_gambar') is invalid @enderror"
                    name="mitra_gambar" id="mitra_gambar">
            </div>
            @error('mitra_gambar')
                <div class="alert alert-danger">
                    <small>Masukkan Data dengan Benar!</small>
                </div>
            @enderror
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
            <h6>Judul</h6>
            <div class="d-flex">
                <input type="text" class="form-control me-2 mb-3 w-50" name="galeri_judul" id="galeri_judul"
                    placeholder="Judul">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="jdl_galeri_color"
                        id="jdl_galeri_color" value="">
                </div>
            </div>
            <h6>Kalimat</h6>
            <div class="d-flex">
                <textarea class="form-control me-2 mb-3 kalimat-text" name="galeri_kalimat" id="galeri_kalimat"
                    placeholder="Kalimat"></textarea>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="klmt_galeri_color"
                        id="klmt_galeri_color" value="">
                </div>
            </div>
            <h6>Gambar</h6>
            <div class="input-group mb-3 input-file">
                <input type="file" class="form-control @error('galeri_gambar') is invalid @enderror"
                    name="galeri_gambar" id="galeri_gambar">
            </div>
            @error('galeri_gambar')
                <div class="alert alert-danger">
                    <small>Masukkan Data dengan Benar!</small>
                </div>
            @enderror
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
        <div class="bagian-kontak">
            <h6>Judul</h6>
            <div class="d-flex">
                <input type="text" class="form-control me-2 mb-3 w-50" name="kontak_judul" id="kontak_judul"
                    placeholder="Judul">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="jdl_kontak_color"
                        id="jdl_kontak_color" value="">
                </div>
            </div>
            <h6>Kalimat</h6>
            <div class="d-flex">
                <textarea class="form-control me-2 mb-3 kalimat-text" name="galeri_kalimat" id="galeri_kalimat"
                    placeholder="Kalimat"></textarea>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="klmt_kontak_color"
                        id="klmt_kontak_color" value="">
                </div>
            </div>
            <h6>Gambar</h6>
            <div class="input-group mb-3 input-file">
                <input type="file" class="form-control @error('kontak_gambar') is invalid @enderror"
                    name="kontak_gambar" id="kontak_gambar">
            </div>
            @error('kontak_gambar')
                <div class="alert alert-danger">
                    <small>Masukkan Data dengan Benar!</small>
                </div>
            @enderror
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
            <div class="d-flex">
                <input type="text" class="form-control me-2 mb-3 w-50" name="tentang_judul" id="tentang_judul"
                    placeholder="Judul" value="">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="jdl_tentang_color"
                        id="jdl_tentang_color" value="">
                </div>
            </div>
            <h6>Kalimat</h6>
            <div class="d-flex">
                <textarea class="form-control me-2 mb-3 kalimat-text" name="tentang_kalimat" id="tentang_kalimat"
                    placeholder="Kalimat"></textarea>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Warna</span>
                    <input type="color" class="form-control pick-color" name="klmt_tentang_color"
                        id="klmt_tentang_color" value="">
                </div>
            </div>
            <h6>Warna Background</h6>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Warna</span>
                <input type="color" class="form-control pick-color" name="bg_tentang_color" id="bg_tentang_color"
                    value="">
            </div>
        </div>
    </div>
    <hr class="w-90">
    <button type="submit" class="tombol-simpan">Simpan</button>
</form>
