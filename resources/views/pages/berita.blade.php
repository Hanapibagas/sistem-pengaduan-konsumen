@extends('layouts.app')

@section('title')
Berita
@endsection

@push('add-styleFe')
<meta name="viewport" content="width=device-width, intial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ asset('frontend/css/blog.css') }}">
@endpush

@section('content')
<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
            <li>Berita</li>
        </div>
    </div>
</div>

<div class="blog-heading">
    <h3>Ada berita apa hari ini ?</h3>
</div>
<section id="blog">
    @forelse ( $berita as $file )
    <div class="blog-container">
        <div class="blog-box" style="border-radius: 10px">
            <div class="blog-img">
                <img style="border-radius: 10px" src="{{ Storage::url($file->gambar) }}" alt="" srcset="">
            </div>
            <div class="blog-text">
                <span><i>{{ $file->tanggal }}</i></span>
                <a href="{{ route('details-berita', $file->slug) }}" class="blog-title">{{ $file->title }}</a>
            </div>
        </div>
    </div>
    @empty
    <div class="blog-container">
        <h1 style="margin-top: 30px"><i>Mohon maaf berita untuk hari ini belum tersedia</i> </h1>
    </div>
    @endforelse
</section>
@endsection
