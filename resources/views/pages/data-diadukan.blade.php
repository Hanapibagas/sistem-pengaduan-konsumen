@extends('layouts.app')

@section('title')
    Data Diri
@endsection

@section('content')
<div id="breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<li><a href="{{ route('index') }}">Beranda</a></li>
			<li><a href="{{ route('data-diri.index') }}">Data Diri</a></li>
			<li>Data Yang Diaadukan</li>
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
                        <form action="{{ route('data-diadukan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_pemilik" style="color: black">Nama Pemilik <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="text" class="form-control " name="nama_pemilik" autocomplete="off" autofocus="">
                            </div>
                            <div class="form-group">
                                <label for="perusahaan" style="color: black">Perusahaan <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="text" class="form-control " name="perusahaan" autocomplete="off" autofocus="">
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="alamat">Alamat <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="text" class="form-control " name="alamat" autocomplete="off">
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="kode_pos">Kode Pos <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="number" class="form-control " name="kode_pos" autocomplete="off">
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="telepon">Telepon <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="number" class="form-control " name="telepon" autocomplete="off">
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="faximile">Faximilie <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="text" class="form-control " name="faximile" autocomplete="off">
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
