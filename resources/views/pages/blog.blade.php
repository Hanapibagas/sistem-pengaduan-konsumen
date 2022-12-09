@extends('layouts.app')

@section('title')
    Blog
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
			<li>Blog</li>
		</div>
	</div>
</div>

<div class="blog-heading">
    <h3>Ada berita apa hari ini ?</h3>
</div>
<section id="blog">
    <div class="blog-container">
        <div class="blog-box">
            <div class="blog-img">
                <img src="{{ asset('frontend/images/blog/blog1.jpg') }}" alt="" srcset="">
            </div>
            <div class="blog-text">
                <span><i>19 oktober 2022</i></span>
                <a href="" class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, atque! Dolor est alias, et similique vel modi!</a>
            </div>
        </div>
    </div>
    <div class="blog-container">
        <div class="blog-box">
            <div class="blog-img">
                <img src="{{ asset('frontend/images/blog/blog1.jpg') }}" alt="" srcset="">
            </div>
            <div class="blog-text">
                <span><i>19 oktober 2022</i></span>
                <a href="" class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, atque! Dolor est alias, et similique vel modi commodi obcaecati eveniet id itaque. </a>
            </div>
        </div>
    </div>
    <div class="blog-container">
        <div class="blog-box">
            <div class="blog-img">
                <img src="{{ asset('frontend/images/blog/blog1.jpg') }}" alt="" srcset="">
            </div>
            <div class="blog-text">
                <span><i>19 oktober 2022</i></span>
                <a href="" class="blog-title">Porro reprehenderit soluta exercitationem beatae commodi veritatis. Quis!</a>
            </div>
        </div>
    </div>
</section>
@endsection
