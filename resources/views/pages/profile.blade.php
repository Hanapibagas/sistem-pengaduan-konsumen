@extends('layouts.app')

@section('title')
Profile
@endsection

@push('add-styleFe')
{{--
<meta name="viewport" content="width=device-width, intial-scale=1.0, maximum-scale=1.0, user-scalable=no"> --}}
{{--
<link rel="stylesheet" href="{{ asset('frontend/css/profile.css') }}"> --}}
@endpush

@section('content')
<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
            <li>Profile</li>
        </div>
    </div>
</div>
<style>
    .tag {
        text-align: center
    }

    .container .visi p {
        font-size: 17px
    }

    .container .misi h3 {
        margin-top: 30px
    }

    .container .misi p {
        font-size: 17px
    }
</style>
<div class="tag">
    <h2><b>Visi Misi.</b></h2>
</div>

<div class="container">
    <div class="visi">
        <h3>VISI :</h3>
        <p>“Terwujudnya Perdagangan Sulawesi Selatan yang Inovatif dan Berdaya Saing, Sebagai Simpul Jejaring
            Perdagangan
            Nasional”</p>
    </div>
    <div class="misi">
        <h3>MISI :</h3>
        <p>1. Meningkatkan efisiensi dan kelancaran distribusi perdagangan dalam negeri. <br>
            2. Meningkatkan ekspor, pengendalian impor dan membuka hubungan kerjasama perdagangan Internasional. <br>
            3. Meningkatkan perlindungan konsumen, pengawasan barang beredar , jasa dan tertib niaga. <br>
            4. Meningkatkan citra produk dan akses pasar dalam dan luar negeri. <br>
            5. Mewujudkan standardisasi ukuran, produk dan jasa serta pengendalian mutu. <br>
            6. Meningkatkan kualitas dan kuantitas pelaku usaha yang berdaya saing. <br>
            7. Meningkatkan sumberdaya aparatur yang inovatif, profesional dan akuntabel.
        </p>
    </div><br>
</div>
@endsection
