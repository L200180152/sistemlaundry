@extends('karyawan.base')

@php
    date_default_timezone_set('Asia/Jakarta');
@endphp

@section('content')
    <div class="content-header">
        <span class="title-page">Buat Order</span>
    </div>
    <a href="/antrian"><button class="tombol-simpan me-4 mt-3 mb-3"><i
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
        {{-- <form class="addorder" action="/addorder" method="POST"> --}}
        <form class="addorder">
            @csrf
            <div class="row">
                <div class="col ">
                    <div class="user-information bg-white p-3 rounded shadow-sm">
                        <div class="d-flex justify-content-between">
                            <span>User Information</span>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#importmember">import
                                member</button>
                        </div>
                        <div class="modal fade" id="importmember" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Import Member</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="p-3">
                                            <table class="table table-bordered table-hover" id="tabel-import">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>NoHp</th>
                                                        <th>Alamat</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($member as $m)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $m->nama }}</td>
                                                            <td>{{ $m->nohp }}</td>
                                                            <td>{{ $m->alamat }}</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-primary btn-sm"
                                                                    onclick="member({{ $m->id }})"
                                                                    data-bs-dismiss="modal"><i
                                                                        class="fa-solid fa-file-import"></i></button></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="tombol-biru" data-bs-dismiss="modal">Batal</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <style>
                                #error {
                                    display: none;
                                }
                            </style>
                            <div class="p-3">
                                <div id="error" class="alert alert-danger" role="alert">
                                    <h6>Mohon Isi Data Berikut Ini</h6>
                                </div>
                            </div>
                            <div class="col">
                                <h6>Nama</h6>
                                <input type="text" class="form-control mb-3 @error('nama') is invalid @enderror"
                                    name="nama" id="nama" placeholder="Nama">
                                @error('nama')
                                    <div class="alert alert-danger">
                                        <small>Masukkan Data dengan Benar!</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <h6>Invoice ID</h6>
                                <input type="text" class="form-control mb-3 @error('invoice') is invalid @enderror"
                                    name="invoice" id="invoice" value="010{{ rand() }}">
                                @error('invoice')
                                    <div class="alert alert-danger">
                                        <small>Masukkan Data dengan Benar!</small>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Nomor HP</h6>
                                <input type="text" class="form-control mb-3 @error('no_hp') is invalid @enderror"
                                    name="no_hp" id="no_hp" placeholder="Nomor HP">
                                @error('no_hp')
                                    <div class="alert alert-danger">
                                        <small>Masukkan Data dengan Benar!</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <h6>Alamat</h6>
                                <textarea class="form-control mb-3 @error('alamat') is invalid @enderror" name="alamat" id="alamat"
                                    placeholder="Alamat"></textarea>
                                @error('alamat')
                                    <div class="alert alert-danger">
                                        <small>Masukkan Data dengan Benar!</small>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="paket-laundry mt-3 bg-white p-3 rounded shadow-sm">
                        <span>Paket Laundry</span>
                        <div class="mt-4">
                            <div class="row mb-3">
                                <div class="col">
                                    @foreach ($kategori->where('tipe', 'paket utama') as $kat)
                                        <button type="button" class="tombol-biru mb-2"
                                            data-bs-target="#kat{{ $kat->id }}" data-bs-toggle="modal"><i
                                                class="fa-solid fa-plus me-2"></i>{{ $kat->nama }}</button>
                                        <div class="modal fade" id="kat{{ $kat->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Masukkan Nilai</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex align-items-center">
                                                            <input type="number" class="form-control w-50 me-2"
                                                                id="nilaikat{{ $kat->id }}">
                                                            <h6>Per Kg</h6>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="tombol-biru"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="button" class="tombol-simpan"
                                                            onclick="addkat({{ $kat->id }})"
                                                            data-bs-dismiss="modal">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col">
                                    @foreach ($kategori->where('tipe', 'item') as $kat)
                                        <button type="button" class="tombol-biru mb-2"
                                            data-bs-target="#kat{{ $kat->id }}" data-bs-toggle="modal"><i
                                                class="fa-solid fa-plus me-2"></i>{{ $kat->nama }}</button>
                                        <div class="modal fade" id="kat{{ $kat->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Masukkan Nilai</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex align-items-center">
                                                            <input type="number" class="form-control w-50 me-2"
                                                                id="nilaikat{{ $kat->id }}">
                                                            <h6>Per Item</h6>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="tombol-biru"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="button" class="tombol-simpan"
                                                            onclick="addkat({{ $kat->id }})"
                                                            data-bs-dismiss="modal">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tanggal-order bg-white p-3 mb-3 rounded shadow-sm">
                        <span>Tanggal Laundry</span>
                        <div class="mt-4">
                            <h6>Tanggal Masuk</h6>
                            <input type="date" class="form-control mb-3 @error('tanggal_masuk') is invalid @enderror"
                                name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk">
                            @error('tanggal_masuk')
                                <div class="alert alert-danger">
                                    <small>Masukkan Data dengan Benar!</small>
                                </div>
                            @enderror
                            <h6>Tanggal Jadi</h6>
                            <input type="date" class="form-control mb-3 @error('tanggal_keluar') is invalid @enderror"
                                name="tanggal_keluar" id="tanggal_keluar" placeholder="Tanggal Jadi">
                            @error('tanggal_keluar')
                                <div class="alert alert-danger">
                                    <small>Masukkan Data dengan Benar!</small>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="invoice bg-white p-3 rounded shadow-sm">
                        <span>Invoice</span>
                        <table class="table" id="table-invoice">
                            <thead>
                                <tr>
                                    <th style="width: 50%">Item</th>
                                    <th>Qty</th>
                                    <th>Sub Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="invoice-body">

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=2 class="text-end">Total</td>
                                    <td id="total">Rp. 0,00</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <button type="submit" class="tombol-simpan mt-3">Tambahkan</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabel-import').DataTable();

            $('#del').click(function() {
                console.log("hapus");
                $(this).closest('tr').remove();
            });

            $('.addorder').submit(function(e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                e.preventDefault();
                let paket = [];
                let subtotal = [];
                let qty = [];
                let total = ($('#total').text()).substring(4, parseInt(($('#total').text()).length) - 3);

                $('tr #paket').each(function() {
                    paket.push($(this).text());
                });
                $('tr #subtotal').each(function() {
                    subtotal.push(parseInt($(this).text()));
                });
                $('tr #qty').each(function() {
                    qty.push(parseInt($(this).text()));
                });
                console.log(paket);
                $.post('/addorder', {
                        nama: $('#nama').val(),
                        invoice: $('#invoice').val(),
                        no_hp: $('#no_hp').val(),
                        alamat: $('#alamat').val(),
                        paket: paket,
                        qty: qty,
                        subtotal: subtotal,
                        totalharga: parseInt(total),
                        tanggal_masuk: $('#tanggal_masuk').val(),
                        tanggal_keluar: $('#tanggal_keluar').val()
                    })
                    .done(function(response) {
                        window.location.href = "/antrian";
                        alert("Data Berhasil Di Tambah");

                    })
                    .fail(function() {
                        alert("Isi Data dengan Benar");
                    });
            });
        });

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

        function member(params) {
            $.get('/getmember/' + params, function(response) {
                $('#nama').val(response[0].nama);
                $('#no_hp').val(response[0].nohp);
                $('#alamat').val(response[0].alamat);
            });
        }

        function hitungtotal() {
            let total = 0;
            console.log('bisa');
            $('tr #subtotal').each(function() {
                total += parseInt($(this).text());
                console.log(total);
            });
            $('#total').text("Rp. " + total + ",00");
        }

        function addkat(params) {
            let nama = $("#nama").val();
            let nohp = $("#nohp").val();
            let alamat = $("#alamat").val();
            let qty = $("#nilaikat" + params).val();
            let total = 0;

            if (nama == '' || nohp == '' || alamat == '') {
                document.getElementById("error").style.display = "block";
                return false;
            } else {
                $.get('/addantrian', {
                    id: params,
                }, function(response) {
                    console.log('Bisaa');
                    console.log(response[0]);
                    $('.invoice-body').append(
                        '<tr><td id="paket">' + response[0].nama + '</td><td id="qty">' + qty +
                        '</td><td id="subtotal">' + (
                            response[0].harga * qty) +
                        '</td><td><button type="button" class="btn btn-sm btn-danger" id="del"><i class="fa-solid fa-trash"></i></button></td></tr>'
                    );
                    hitungtotal();
                });
            }
        }

        $("#table-invoice").on('click', '#del', function() {
            $(this).closest('tr').remove();
            hitungtotal();
        });
    </script>
@endsection
