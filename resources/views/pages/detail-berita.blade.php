@extends('layouts.app')

@section('title')
Detail berita
@endsection

@push('add-styleFe')
<meta name="viewport" content="width=device-width, intial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ asset('frontend/css/details-css.css') }}">
@endpush

@section('content')
<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
            <li><a href="{{ route('berita.index') }}">berita</a></li>
            <li>Detail berita</li>
        </div>
    </div>
</div>
<div class=" colum">
    <div class="gambar">
        <img src="{{ Storage::url($berita->gambar) }}" alt="" srcset="">
    </div>
    <div class="isi">
        <h1 style="margin-top: -10px">{{ $berita->title }}</h1>
        <p class="penulis" style="font-size: 15px;margin-left: 662px; margin-top: -10px"><i><b>{{ $berita->tanggal
                    }}</b></i></p>
        <style>
            .berita-des p {
                text-indent: 40ppx;
                font-size: 20px
            }
        </style>
        <div class="berita-des">
            {!! $berita->deskripsi !!}
        </div>
    </div>
</div>
@endsection
