@extends('layouts.app')

@section('title')
    Data Diri
@endsection

@push('add-styleFe')
    <link rel="stylesheet" href="{{ asset('frontend/css/styles1.css') }}">
@endpush

@section('content')
<div id="breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
			<li>Form infromasi pengaduan</li>
		</div>
	</div>
</div><br>

@if (session('status'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses!',
        text : "{{ session('status') }}",
    });
</script>
@endif
<div class="container">
    <h1 style="text-align: center">
        <a href="{{ route('kirim-pengadu') }}">Pengaduan</a> /
        <a style="color: #99b8c4" href="{{ route('kirim-informasi') }}">Informasi</a>
    </h1>
</div>

<div class="r-bg-x pb120">
    <div class="container w-992">
        <div class="blog-details">
            @if ( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach ( $errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <section class="contact">
                <div class="container" style="width: 100%; margin-left: -10px">
                    <div class="panel panel-default" style="border-color: #99b8c4;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Formulir Isi Infromasi Pengaduan</h3>
                        </div>
                        <div class="panel-body">
                            <form id="form_post" action="{{ route('kirim-informasi-admin') }}" method="POST">
                                @csrf
                                <div id="message"></div>

                                <div class="col-md-12 col-sm-12" style="margin-top: 10px">
                                    <div class="panel panel-default" style="border-color: #99b8c4;">
                                        <div class="panel-heading" style="background-color: transparent; line-height: 1em; ">
                                            <h5>I.  INFORMASI TENTANG PENGADUAN</h5><br>
                                        </div>
                                        <div class="panel-body" style="padding-left: 0;padding-right: 0;">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <textarea name="informasi_pengaduan" type="text" rows="4" class="form-control input-sm" id="masalah_dilaporkan" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6" style="margin-top: 10px">
                                        <div class="col-md-12 col-sm-12" style="margin-top: -20px">
                                            <button style="margin-left: -15px" type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- container end -->
              </section>
        </div>
    </div>
</div><br>
@endsection

@push('add-script')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('informasi_pengaduan');
    </script>
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
@endpush
