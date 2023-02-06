@extends('layouts.app')

@section('title')
Tata Cara Pengaduan
@endsection

@section('content')
<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
            <li>Tata Cara Pengaduan</li>
        </div>
    </div>
</div>


<div class="r-bg-x pb120">
    <div class="container w-992">
        <div class="blog-details">
            <div class="row">
                <img src="{{ asset ('storage/'.$kebijakan->kebijakan) }}"
                    style="width: 100%; margin-top: 20px; margin-bottom: 20px" alt="" srcset="">
            </div>
        </div>
    </div>
</div>

@endsection
