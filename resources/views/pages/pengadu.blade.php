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
            <li>Form pengaduan</li>
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
        <a style="color: #99b8c4" href="{{ route('kirim-pengadu') }}">Pengaduan</a> /
        <a href="{{ route('kirim-informasi') }}">Informasi</a>
    </h1>
</div>

<div class="r-bg-x pb120">
    <div class="container w-992">
        <div class="blog-details">
            <section class="contact">
                <div class="container" style="width: 100%; margin-left: -10px">
                    <div class="panel panel-default" style="border-color: #99b8c4;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Formulir Isi Pengaduan</h3>
                        </div>
                        <div class="panel-body">
                            <form id="form_post" action="{{ route('kirim-pengaduan.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div id="message"></div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="panel panel-default" style="border-color: #99b8c4;">
                                        <div class="panel-heading"
                                            style="background-color: transparent; line-height: 1em;">
                                            <h5>I. IDENTITAS KONSUMEN</h5><br>
                                        </div>
                                        <div class="panel-body" style="padding-left: 0;">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="nama_lengkap" class="col-md-4 col-sm-4">Nama Lengkap <i
                                                        class="text-danger" style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="nama_lengkap" type="text"
                                                        class="form-control input-sm @error('nama_lengkap') is-invalid @enderror"
                                                        id="nama_lengkap" placeholder="Nama lengkap" value="">
                                                    @error('nama_lengkap')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="umur" class="col-md-4 col-sm-4">Umur <i class="text-danger"
                                                        style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="umur" type="text"
                                                        class="form-control input-sm @error('umur') is-invalid @enderror"
                                                        id="umur" placeholder="Umur" value="">
                                                    @error('umur')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="jenis_kelamin" class="col-md-4 col-sm-4">Jenis
                                                    Kelamin <i class="text-danger"
                                                        style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <select name="jenis_kelamin"
                                                        class="form-control input-sm select2 @error('jenis_kelamin') is-invalid @enderror">
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                    @error('jenis_kelamin')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="email" class="col-md-4 col-sm-4">E-Mail <i
                                                        class="text-danger" style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="email" type="email"
                                                        class="form-control input-sm @error('email') is-invalid @enderror"
                                                        id="email" placeholder="Email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="telepon" class="col-md-4 col-sm-4">Telpon
                                                    (<i>Whatsapp</i>) <i class="text-danger"
                                                        style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="telpon" type="number"
                                                        class="form-control input-sm @error('telpon') is-invalid @enderror"
                                                        id="telpon" placeholder="Telpon / hp">
                                                    @error('telpon')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="no_identitas" class="col-md-4 col-sm-4">No Identitas
                                                    (KTP/SIM/Paspor) <i class="text-danger"
                                                        style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="no_identitas" type="number"
                                                        class="form-control input-sm @error('no_identitas') is-invalid @enderror"
                                                        id="no_identitas" placeholder="No identitas">
                                                    @error('no_identitas')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="alamat" class="col-md-4 col-sm-4">Alamat Lengkap <i
                                                        class="text-danger" style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <textarea name="alamat" rows="3"
                                                        class="form-control @error('alamat') is-invalid @enderror"
                                                        placeholder="Alamat"></textarea>
                                                    @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="panel panel-default" style="border-color: #99b8c4;">
                                        <div class="panel-heading"
                                            style="background-color: transparent; line-height: 1em;">
                                            <h5>II. IDENTITAS PELAKU USAHA</h5><br>
                                            <small></small>
                                        </div>
                                        <div class="panel-body" style="padding-left: 0;">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="nama_pelaku_usaha" class="col-md-4 col-sm-4">Nama Pelaku
                                                    Usaha</label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="nama_pelaku_usaha" type="text"
                                                        class="form-control input-sm" id="nama_pelaku_usaha"
                                                        placeholder="( BERI TANDA - JIKA TIDAK MENGETAHUI )" value="">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="perusahaan" class="col-md-4 col-sm-4">Perusahaan <i
                                                        class="text-danger" style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="perusahaan" type="text"
                                                        class="form-control input-sm @error('perusahaan') is-invalid @enderror"
                                                        id="perusahaan" placeholder="" value="">
                                                    @error('perusahaan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="kode_pos" class="col-md-4 col-sm-4">Kode pos</label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="kode_pos" type="text" class="form-control input-sm"
                                                        id="kode_pos"
                                                        placeholder="( BERI TANDA - JIKA TIDAK MENGETAHUI )" value="">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="alamat" class="col-md-4 col-sm-4">Alamat perusahaan <i
                                                        class="text-danger" style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <textarea name="alamat" rows="3"
                                                        class="form-control @error('alamat') is-invalid @enderror"
                                                        placeholder="Alamat"></textarea>
                                                    @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12" style="margin-top: 10px">
                                    <div class="panel panel-default" style="border-color: #99b8c4;">
                                        <div class="panel-heading"
                                            style="background-color: transparent; line-height: 1em; ">
                                            <h5>III. TENTANG PENGADUAN</h5><br>
                                            <small>Barang / Jasa yang diadukan</small>
                                        </div>
                                        <div class="panel-body" style="padding-left: 0;">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="jenis_produk" class="col-md-4 col-sm-4">Jenis Produk <i
                                                        class="text-danger" style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <select
                                                        class="form-control select2 @error('jenis_produk') is-invalid @enderror"
                                                        style="width: 100%;" id="jenis_barang_jasa" name="jenis_produk"
                                                        onchange="select2jenisproduk('detil_produk',this.value)">
                                                        <option value="">--- Pilih Jenis ---</option>
                                                        <option value="Barang">Barang</option>
                                                        <option value="Jasa">Jasa</option>
                                                    </select>
                                                    @error('jenis_produk')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name" class="col-md-4 col-sm-4">Merk Dagang <i
                                                        class="text-danger" style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="merek_dagang" type="text"
                                                        class="form-control input-sm @error('merek_dagang') is-invalid @enderror"
                                                        id="merk_dagang" placeholder="">
                                                    @error('merek_dagang')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name" class="col-md-4 col-sm-4">Type</label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="type" type="text" class="form-control input-sm"
                                                        id="type" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name" class="col-md-4 col-sm-4">Jenis Pengaduan <i
                                                        class="text-danger" style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <select
                                                        class="form-control select2 @error('jenis_pengaduan') is-invalid @enderror"
                                                        style="width: 100%;" id="jenis_pengaduan" name="jenis_pengaduan"
                                                        onchange="select2jenisproduk('detil_produk',this.value)">
                                                        <option value="">--- Pilih Jenis ---</option>
                                                        <option value="Standar">Standar</option>
                                                        <option value="Label">Label</option>
                                                        <option value="Petunjuk Penggunaan">Petunjuk Penggunaan</option>
                                                        <option value="Pelayanan Purna Jual">Pelayanan Purna Jual
                                                        </option>
                                                        <option value="Cara Menjual">Cara Menjual</option>
                                                        <option value="Pengiklanan / Promosi">Pengiklanan / Promosi
                                                        </option>
                                                        <option value="Klausula Baku">Klausula Baku</option>
                                                        <option value="Komposisi bahan dan makanan">Komposisi bahan dan
                                                            makanan</option>
                                                        <option value="Minuman">Minuman</option>
                                                        <option
                                                            value="Penggunaan alat ukur, alat takar, alat timbang dan alat perlengkapan">
                                                            Penggunaan alat ukur, alat takar, alat timbang dan alat
                                                            perlengkapan</option>
                                                        <option
                                                            value="Kesesuiaan label dan kebenaran kuantitas (berat bersih) barang dalam keadaan terbungkus">
                                                            Kesesuiaan label dan kebenaran kuantitas (berat bersih)
                                                            barang dalam keadaan terbungkus</option>
                                                        <option value="Penulisan satuan ukuran">Penulisan satuan ukuran
                                                        </option>
                                                        <option value="Lain-lain">Lain-lain jika tidak mengerti</option>
                                                    </select>
                                                    @error('jenis_pengaduan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name" class="col-md-4 col-sm-4">Saksi <i class="text-danger"
                                                        style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <select
                                                        class="form-control select2 @error('saksi') is-invalid @enderror"
                                                        style="width: 100%;" id="saksi" name="saksi"
                                                        onchange="select2jenisproduk('detil_produk',this.value)">
                                                        <option value="">--- Pilih Jenis ---</option>
                                                        <option value="Ada, hubungan dengan saksi">Ada, hubungan dengan
                                                            saksi</option>
                                                        <option value="Tidak">Tidak</option>
                                                    </select>
                                                    @error('saksi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name" class="col-md-4 col-sm-4">Saat Kejadian Ditemukan
                                                    (Tanggal / Jam / Lokasi) <i class="text-danger"
                                                        style="font-size: 14px;">*</i></label>
                                                <div class="col-md-2 col-sm-2">
                                                    <input name="tanggal" type="date"
                                                        class="@error('tanggal') is-invalid @enderror"
                                                        id="saat_kejadian" placeholder="Tanggal Kejadian"
                                                        title="Tanggal Kejadian">
                                                    @error('tanggal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <input name="jam" type="time" class="" id="jam_waktu"
                                                        placeholder="Jam Kejadian" title="Jam Kejadian jam:menit:Am/Pm">
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <input name="lokasi" type="text"
                                                        class="form-control input-sm @error('lokasi') is-invalid @enderror"
                                                        id="tempat_lokasi" placeholder="Tempat/Lokasi Kejadian">
                                                    @error('lokasi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name" class="col-md-4 col-sm-4">Bukti-Bukti <i
                                                        class="text-danger" style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="bukti_bukti" type="text"
                                                        class="form-control input-sm @error('bukti_bukti') is-invalid @enderror"
                                                        id="merk_dagang" placeholder="https://drive.google.com/CONTOH">
                                                    @error('bukti_bukti')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="bukti_pembelian" class="col-md-4 col-sm-4">Bukti
                                                    Pembelian <i class="text-danger"
                                                        style="font-size: 14px;">*</i></label>
                                                <div class="col-md-8 col-sm-8">
                                                    <input type="file"
                                                        class="form-control input-sm @error('bukti_pembelian') is-invalid @enderror"
                                                        name="bukti_pembelian">
                                                    @error('bukti_pembelian')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong style="color: red">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name" class="col-md-4 col-sm-4">Bentuk Kerugian</label>
                                                <label for="name" class="col-md-2 col-sm-2">Material</label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input name="material" class="form-control input-sm" type="text"
                                                        id="material"
                                                        placeholder="( BERI TANDA - JIKA TIDAK MENGETAHUI )">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12">
                                                <label for="name" class="col-md-4 col-sm-4"></label>
                                                <label for="name" class="col-md-2 col-sm-2">Fisik</label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input name="fisik" class="form-control input-sm" type="text"
                                                        id="fisik" placeholder="( BERI TANDA - JIKA TIDAK MENGETAHUI )">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6" style="margin-top: 10px">
                                    <div class="panel panel-default" style="border-color: #99b8c4;">
                                        <div class="panel-heading"
                                            style="background-color: transparent; line-height: 1em;">
                                            <h5>IV. JENIS TUNTUTAN <i class="text-danger" style="font-size: 14px;">*</i>
                                            </h5><br>
                                        </div>
                                        <div class="panel-body" style="padding-left: 0;">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <div class="col-md-12 col-sm-12">
                                                    <input type="radio" name="jenis_tuntutan" value="Pengembalian Uang"
                                                        onchange="jen_lain2(this.value)"> <label
                                                        for="Pengembalian Uang">Pengembalian Uang</label><br>
                                                    <input type="radio" name="jenis_tuntutan"
                                                        value="Penggantian Barang dan / atau Jasa yang sejenis atau setara nilainya"
                                                        onchange="jen_lain2(this.value)"> <label
                                                        for="Penggantian Barang dan / atau Jasa yang sejenis atau setara nilainya">Penggantian
                                                        Barang yang sejenis / setara nilainya</label><br>
                                                    <input type="radio" name="jenis_tuntutan" value="Lain-lain"
                                                        onchange="jen_lain2(this.value)"> <label
                                                        for="Lain-lain">Lain-lain</label><br>
                                                    <input type="text" id="show" name="freetext_lain2"
                                                        style="display: none;" class="form-control input-sm"> <label
                                                        for="freetext_lain2"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6" style="margin-top: 10px">
                                    <div class="panel panel-default" style="border-color: #99b8c4;">
                                        <div class="panel-heading"
                                            style="background-color: transparent; line-height: 1em;">
                                            <h5>V. KRONOLOGIS PENGADUAN <i class="text-danger"
                                                    style="font-size: 14px;">*</i></h5><br>
                                        </div>
                                        <div class="panel-body" style="padding-left: 0;padding-right: 0;">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <textarea name="kronologis" type="text" rows="4"
                                                    class="form-control input-sm @error('kronologis') is-invalid @enderror"
                                                    id="masalah_dilaporkan" placeholder=""></textarea>
                                                @error('kronologis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12" style="margin-top: 10px">
                                    <div class="panel panel-default" style="border-color: #99b8c4;">
                                        <div class="panel-heading"
                                            style="background-color: transparent; line-height: 1em;">
                                            <h5>VI. PERMINTAAN KONSUMEN <i class="text-danger"
                                                    style="font-size: 14px;">*</i></h5><br>
                                        </div>
                                        <div class="panel-body" style="padding-left: 0;padding-right: 0;">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <textarea name="permintaan" type="text" rows="4"
                                                    class="form-control input-sm @error('permintaan') is-invalid @enderror"
                                                    id="masalah_dilaporkan" placeholder=""></textarea>
                                                @error('permintaan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6" style="margin-top: 10px">
                                    <div class="col-md-12 col-sm-12" style="margin-top: 10px">
                                        <button style="margin-left: -15px" type="submit"
                                            class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div><br>
@endsection

@push('add-script')
<script src="{{ asset('frontend/js/scripts.js') }}"></script>
@endpush