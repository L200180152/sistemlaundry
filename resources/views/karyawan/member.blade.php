@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Pesanan</span>
        <div>
            <button class="tombol-biru me-4" data-bs-toggle="modal" data-bs-target="#tambahmember"><i
                    class="fa-solid fa-plus me-2"></i>Tambah
                Member</button>
            <!-- Modal -->
            <div class="modal fade" id="tambahmember" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/addmember" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Member</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="p-4">
                                    <span>Nama</span>
                                    <input type="text" class="form-control mb-3" name="nama" id="nama">
                                    <span>Nomor HP</span>
                                    <input type="text" class="form-control mb-3" name="nohp" id="nohp">
                                    <span>Alamat</span>
                                    <textarea name="alamat" id="alamat" class="form-control mb-3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="tombol-biru" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="tombol-simpan">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('sukses'))
        <div class="alert alert-success mt-3">
            {{ session('sukses') }}
        </div>
    @elseif(session('gagal'))
        <div class="alert alert-danger mt-3">
            {{ session('gagal') }}
        </div>
    @endif

    <div class="content-main">
        <table id="table-order" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama </th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($member as $o)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $o->nama }}</td>
                        <td>{{ $o->nohp }} Kg</td>
                        <td>{{ $o->alamat }}</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-danger" data-bs-target="#hapusmember{{ $o->id }}"
                                data-bs-toggle="modal"><i class="fa-solid fa-trash text-light"></i></button>
                            <div class="modal fade" id="hapusmember{{ $o->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/hapusmember/{{ $o->id }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Member</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>Yakin ingin menghapus member ini?</h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="tombol-biru"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="tombol-merah">Hapus</button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-order').DataTable();
        });
    </script>
@endsection
