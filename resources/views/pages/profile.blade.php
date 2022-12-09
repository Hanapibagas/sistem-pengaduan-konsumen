@extends('layouts.app')

@section('title')
    Profile
@endsection

@push('add-styleFe')
    {{-- <meta name="viewport" content="width=device-width, intial-scale=1.0, maximum-scale=1.0, user-scalable=no"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/profile.css') }}">
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

<div class="blog-heading">
    <h3>PROFILE</h3>
</div>

<section id="blog">
    <div class="blog-container">
        {{-- <div class="blog-box"> --}}
            <div class="blog-text">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil odit reiciendis officia vitae nam ab, rerum corporis tempora, eius aliquid, odio corrupti adipisci minima officiis laboriosam enim molestias harum itaque.</h4>
            </div>
        {{-- </div> --}}
    </div>
</section>

@endsection
