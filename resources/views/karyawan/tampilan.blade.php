@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Tampilan Website</span>
    </div>

    @if (session('sukses'))
        <div class="alert mt-4 alert-success">
            {{ session('sukses') }}
        </div>
    @endif

    @if (session('gagal'))
        <div class="alert mt-4 alert-danger">
            {{ session('gagal') }}
        </div>
    @endif

    <div class="content-main">
        @if ($items <= 1)
            @include('karyawan.includes.addtampilan')
        @else
            @include('karyawan.includes.updatetampilan')
        @endif
    </div>
@endsection
