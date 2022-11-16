@extends('layouts.app')

@section('title')
    Data Diri
@endsection

@section('content')
<div id="breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<li><a href="{{ route('index') }}">Beranda</a></li>
			<li>Data Diri</li>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="sol-img mt60"></div>
                    <div class="ree-blog-details">
                        <form action="{{ route('data-diri.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama" style="color: black">Nama Lengkap <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="text" class="form-control " name="nama" autocomplete="off" autofocus="">
                            </div>
                            <div class="form-group">
                                <label for="umur" style="color: black">Umur <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="number" class="form-control " name="umur" autocomplete="off" autofocus="">
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="jenis_kelamin">Jenis Kelamin <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="text" class="form-control " name="jenis_kelamin" autocomplete="off">
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="alamat">Alamat <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="text" class="form-control " name="alamat" autocomplete="off">
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="telepon">Telepon <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="number" class="form-control " name="telepon" autocomplete="off">
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="bukti_diri">Bukti Diri <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="text" class="form-control " name="bukti_diri" autocomplete="off">
                            </div>>
                            <button type="submit" class="btn btn-success"> Selanjutnya </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
@endsection
