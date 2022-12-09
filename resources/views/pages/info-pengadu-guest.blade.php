@extends('layouts.app')

@section('title')
    Data Diri
@endsection

@section('content')
<div id="breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
			<li>Laporan Pengadu</li>
		</div>
	</div>
</div><br>

<div class="container"><br><br><br>
    <div class="alert alert-success mt-3" role="alert">
        <h5 style="font-style: italic; color: red;">
        Mohon maaf anda belum terdaftar silahkan melewati tahap registrasi dan anda dapat segera <strong><a href="{{ route('login') }}">Login</a></strong> dengan akun yang sudah ada!
        </h5>
    </div><br><br><br>
</div>
@endsection
