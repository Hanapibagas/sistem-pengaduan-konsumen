@extends('layouts.admin')

@section('title')
    Detail Laporan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-body">
                    <div class="text-center">
                        <h4 class="mb-3">Detail Pelaporan</h4>
                            <span style="float: right;"><a href="{{ route('laporan.index') }}" class="btn btn-sm btn-primary"><i class="fa fa-undo"></i>kembali</a></span><br>
                    </div>
                    <form action="{{ route('laporan.update', $pengadu->id ) }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-5">
                            <b>Nama :</b>{{ $pengadu->pengadu->nama }}<br>
                            <b>Umur :</b>{{ $pengadu->pengadu->umur }} <br>
                            <b>Jenis Kelamin :</b> {{ $pengadu->pengadu->jenis_kelamin }} <br>
                            <b>Alamat :</b> {{ $pengadu->pengadu->alamat }} <br>
                            <b>Telepon :</b> {{ $pengadu->pengadu->telepon }} <br>
                            <b>Bukti Diri :</b> <img width="100px" height="60%" src="{{ asset ('storage/'.$pengadu->pengadu->bukti_diri) }}" alt="fesfh"> <br>
                        </div>
                        <div class="mb-5">
                            <b>Nama Pemilik :</b>{{ $pengadu->diadukan->nama_pemilik }}<br>
                            <b>Perusahaan :</b>{{ $pengadu->diadukan->perusahaan }} <br>
                            <b>Alamat :</b> {{ $pengadu->diadukan->alamat }} <br>
                            <b>Kode Pos :</b> {{ $pengadu->diadukan->kode_pos }} <br>
                            <b>Telepon :</b> {{ $pengadu->diadukan->telepon }} <br>
                            <b>Faximile :</b> {{ $pengadu->diadukan->faximile }} <br>
                        </div>
                        <div class="mb-5">
                            <b>Jenis Pengaduan :</b>{{ $pengadu->tentang_diadukan->jenis_pengaduan }}<br>
                            <b>Tanggal :</b>{{ $pengadu->tentang_diadukan->tanggal }} <br>
                            <b>Jam :</b> {{ $pengadu->tentang_diadukan->jam }} <br>
                            <b>Lokasi :</b> {{ $pengadu->tentang_diadukan->lokasi }} <br>
                            <b>Bukti Pembelian :</b> {{ $pengadu->tentang_diadukan->bukti_pembelian }} <br>
                            <b>Bukti Saksi :</b> {{ $pengadu->tentang_diadukan->bukti_saksi }} <br>
                            <b>Barang Bukti :</b> <a href="{{ $pengadu->tentang_diadukan->barang_bukti }}">{{ $pengadu->tentang_diadukan->barang_bukti }}</a> <br>
                            <b>Bentuk Kerugian :</b> {{ $pengadu->tentang_diadukan->bentuk_kerugian }} <br>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" required class="form-control">
                                <option value="{{ $pengadu->status }}">
                                    Jangan Ubah ({{ $pengadu->status }})
                                </option>
                                <option value="Di Terima">Di Terima</option>
                                <option value="Di Tolak">Di Tolak</option>
                                <option value="Sedang Di Periksa">Sedang Di Periksa</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
