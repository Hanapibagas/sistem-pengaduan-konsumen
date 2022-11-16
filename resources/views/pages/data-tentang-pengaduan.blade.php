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
			<li><a href="{{ route('data-diadukan.index') }}">Data Diadukan</a></li>
			<li>Data Tentang Pengaduan</li>
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
                                <label for="nama_pemilik" style="color: black">Jenis Pengaduan <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <select name="nama_pemilik" required class="form-control">
                                    <option value="Pilih Jenis Pengaduan">Pilih Jenis Pengaduan</option>
                                    <option value="Pertanian Dan Kehutanan">Pertanian Dan Kehutanan</option>
                                    <option value="Standar Mutu">Standar Mutu</option>
                                    <option value="Jasa">Jasa</option>
                                    <option value="Iklan">Iklan</option>
                                    <option value="Klasula Baku">Klasula Baku</option>
                                    <option value="label">label</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="perusahaan" style="color: black">Saat Kejadian <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="date" class="form-control " name="perusahaan" autocomplete="off" autofocus=""><br>
                                <input type="time" class="form-control " name="perusahaan" autocomplete="off" autofocus=""><br>
                                <input type="text" class="form-control " placeholder="Tempat/lokasi" name="perusahaan" autocomplete="off" autofocus="">
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="alamat">Bukti Pembelian <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <select name="nama_pemilik" required class="form-control">
                                    <option value="Pilih Jenis Bukti">Pilih Jenis Bukti</option>
                                    <option value="Bon Pembelian">Bon Pembelian</option>
                                    <option value="Kuitansi">Kuitansi</option>
                                    <option value="Faktur">Faktur</option>
                                    <option value="Tanda Terima">Tanda Terima</option>
                                    <option value="Foto Barang">Foto Barang</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="kode_pos">Bukti Saksi <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <select name="nama_pemilik" required class="form-control">
                                    <option value="Apakah Anda Memiliki Bukti Saksi">Apakah Anda Memiliki Bukti Saksi</option>
                                    <option value="Ada, hubungan dengan saksi">Ada, hubungan dengan saksi</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                            </div>
                            <div class="form-group" style="color: black">
                                <label for="telepon">Barang Bukti <i class="text-danger" style="font-size: 14px;">*</i></label>
                                <input type="number" class="form-control " name="telepon" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-success"> Selanjutnya </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
@endsection
