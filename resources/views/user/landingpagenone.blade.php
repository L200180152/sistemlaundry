<nav class="nav_view navbar navbar-expand-lg navbar-light fixed-top" onscroll="navbar()">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MyLaundry.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mitra">Gabung Mitra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content">
    <div id="beranda" class="hero">
        {{-- style="background-image: url('{{ asset('../storage/img/beranda/' . $item->beranda_gambar) }}')"> --}}
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="beranda-text">
                    <h1>MyLaundry.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem odit culpa provident
                        esse, tempore harum ipsum dicta voluptatem doloribus illo adipisci vel quidem pariatur?
                        Odio.</p>
                    {{-- <h1>{{ $item->beranda_judul }}</h1>
                    <p>{{ $item->beranda_kalimat }}</p> --}}
                    <p><a href="/login" class="btn btn-light rounded fw-bold">Mulai</a></p>
                </div>
            </div>
        </div>
    </div>

    <div id="mitra" class="mitra">
        <div class="row">
            <div class="col-md-6">
                <div class="mitra-text">
                    <h1>Jadilah Bagian dari Kami</h1>
                    <p>Menjadi mitra Laundry Kilat sangat berarti, bukalah outlet di segala penjuru</p>
                    <p><a href="/mitra" class="btn btn-primary rounded fw-bold">Bergabung Bersama Kami</a></p>
                </div>
            </div>
            <div class="col-md-6 mitra-img">
                <div class="mitra-img1">
                    <img src="{{ asset('/img/img1.jpg') }}" class="mitra-img2">
                </div>
            </div>
        </div>
    </div>
    <div id="galeri" class="galeri">
        <div class="row">
            <div class="col-md-6 mitra-img">
                <div class="mitra-img1">
                    <img src="{{ asset('/img/img2.jpg') }}" class="mitra-img2">
                </div>
            </div>
            <div class="col-md-6">
                <div class="galeri-text">
                    <h1>Galeri MyLaundry.</h1>
                    <p>Ingin tau seperti apa kita bekerja?</p>
                    <p><a href="/galeri" class="btn btn-primary rounded fw-bold">Selengkapnya</a></p>
                </div>
            </div>
        </div>
    </div>
    <div id="kontak" class="kontak">
        <div class="kontak-hero">
            <div class="row">
                <div class="col-md-6">
                    <div class="kontak-text">
                        <h1>Anda Memiliki Pertanyaan?</h1>
                        <p>Hubungi kami dibawah ini</p>
                        <form action="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control border" id="nama"
                                    placeholder="Masukkan Nama">
                                <label for="nama" class="text-secondary">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control border" id="email"
                                    placeholder="Masukkan Email">
                                <label for="email" class="text-secondary">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control border" placeholder="Masukkan Pesan" id="pesan" style="height: 100px"></textarea>
                                <label for="pesan" class="text-secondary">Pesan</label>
                            </div>
                            <p><a href="#" class="btn btn-light rounded fw-bold me-3">Kirim</a> atau <a
                                    href="#" class="btn btn-success rounded ms-3"><i
                                        class="fa-brands fa-whatsapp me-2"></i>Whatsapp</a></p>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 kontak-img">
                    <div class="mitra-img1">
                        <img src="{{ asset('/img/img3.jpg') }}" class="mitra-img2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tentang" class="tentang text-center">
        <div class="header-tentang">
            <h1>Tentang Kami</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 p-3 tentang-text">Lorem ipsum dolor sit amet consectetur adipisicing
                elit.
                Deleniti
                distinctio
                magni unde, facilis magnam, nostrum nobis illo, illum consectetur et maiores nemo atque provident
                enim autem soluta earum commodi temporibus harum? Nobis vel eum quo, qui nulla, natus sint incidunt
                aliquid ipsum, amet mollitia iure iste dolore aut eaque iusto voluptas labore quod consectetur sunt!
                Neque blanditiis incidunt nihil iste?</div>
            <div class="col-md-4 p-3 tentang-text">Lorem ipsum dolor sit amet consectetur adipisicing
                elit.
                Illo quo
                expedita maxime
                fuga sapiente quibusdam optio possimus nesciunt iste ab numquam dignissimos, quod dolorum reiciendis
                sunt officiis modi in debitis!</div>
        </div>
    </div>

</div>

<div class="container">
    <footer class="row row-cols-5 py-5 my-5 border-top">
        <div class="col link_footer">
            <a href="#beranda" class="d-flex align-items-center link-dark text-decoration-none">
                MyLaundry.
            </a>
        </div>
        <div class="col">

        </div>
        <div class="col">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>
    </footer>
</div>
