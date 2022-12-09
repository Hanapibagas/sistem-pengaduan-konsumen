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
                <div class="col-lg-12" style="margin-top: -120px">
                    <div class="sol-img mt60"></div>
                    <div class="ree-blog-details">
                        <div class="wrapper">
                            <div class="form_wrap">
                                <form action="{{ route('data-diri.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form_1 data_info">
                                        <h2>Data Diri</h2>
                                            <div class="form_container">
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
                                                    <select name="jenis_kelamin" required class="form-control">
                                                        <option value="Pilih Jenis Pengaduan">Jenis Kelamin</option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
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
                                                    <input type="file" class="form-control " name="bukti_diri" autocomplete="off">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form_2 data_info" style="display: none;">
                                        <h2>Data Diadukan</h2>
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
                                        </div>
                                    </div>
                                    <div class="form_3 data_info" style="display: none;">
                                        <h2>Data Tentang Pengaduan</h2>
                                        <div class="form-group">
                                            <label for="jenis_pengaduan" style="color: black">Jenis Pengaduan <i class="text-danger" style="font-size: 14px;">*</i></label>
                                            <select name="jenis_pengaduan" required class="form-control">
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
                                            <label for="" style="color: black">Saat Kejadian <i class="text-danger" style="font-size: 14px;">*</i></label>
                                            <input type="date" class="form-control " name="tanggal" autocomplete="off" autofocus=""><br>
                                            <input type="time" class="form-control " name="jam" autocomplete="off" autofocus=""><br>
                                            <input type="text" class="form-control " placeholder="Tempat/lokasi" name="lokasi" autocomplete="off" autofocus="">
                                        </div>
                                        <div class="form-group" style="color: black">
                                            <label for="bukti_pembelian">Bukti Pembelian <i class="text-danger" style="font-size: 14px;">*</i></label>
                                            <select name="bukti_pembelian" required class="form-control">
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
                                            <label for="bukti_saksi">Bukti Saksi <i class="text-danger" style="font-size: 14px;">*</i></label>
                                            <select name="bukti_saksi" required class="form-control">
                                                <option value="Apakah Anda Memiliki Bukti Saksi">Apakah Anda Memiliki Bukti Saksi</option>
                                                <option value="Ada, hubungan dengan saksi">Ada, hubungan dengan saksi</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="color: black">
                                            <label for="barang_bukti">Barang Bukti <i class="text-danger" style="font-size: 14px;">*</i></label>
                                            <input type="text" class="form-control " placeholder="Link google drive" name="barang_bukti" autocomplete="off">
                                        </div>
                                        <div class="form-group" style="color: black">
                                            <label for="bentuk_kerugian">Bentuk Kerugian Yang diderita <i class="text-danger" style="font-size: 14px;">*</i></label>
                                            <select name="bentuk_kerugian" required class="form-control">
                                                <option value="Bentuk kerugian anda">Bentuk kerugian anda </option>
                                                <option value="Material">Material</option>
                                                <option value="Phisik">Phisik</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="btns_wrap">
                                        <div class="common_btns form_1_btns">
                                            <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                                        </div>
                                        <div class="common_btns form_2_btns" style="display: none;">
                                            <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                                            <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                                        </div>
                                        <div class="common_btns form_3_btns" style="display: none;">
                                            <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                                            <button type="submit" class="btn_done">Done</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="modal_wrapper">
                            <div class="shadow"></div>
                            <div class="success_wrap">
                                <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
                                <p>You have successfully completed the process.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
@endsection

@push('add-script')
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
@endpush
