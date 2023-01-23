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
                        <h4 class="mb-3">DETAIL DATA PELAPORAN</h4>
                        <span style="float: right;"><a href="{{ route('data-laporan-pengaduan') }}"
                                class="btn btn-sm btn-primary"><i class="fa fa-undo"></i> kembali</a></span><br>
                    </div>
                    <form action="{{ route('update-data-laporan-pengaduan', $laporanpengaduan->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-5">
                            <b>NAMA :</b><i>{{ $laporanpengaduan->pengadu->nama_lengkap }}</i><br>
                            <b>UMUR :</b><i>{{ $laporanpengaduan->pengadu->umur }}</i> <br>
                            <b>No. (KTP/SIM/Paspor) :</b><i>{{ $laporanpengaduan->pengadu->no_identitas }}</i> <br>
                            <b>JENIS KELAMIN :</b> <i>{{ $laporanpengaduan->pengadu->jenis_kelamin }}</i> <br>
                            <b>ALAMAT :</b> <i>{{ $laporanpengaduan->pengadu->alamat }}</i> <br>
                            <b>EMAIL :</b> <i>{{ $laporanpengaduan->pengadu->email }}</i> <br>
                            <b>TELEPON (Whatsapp) :</b> <i>{{ $laporanpengaduan->pengadu->telepon }}</i> <br>
                        </div>
                        <div style="margin-top: -20px" class="mb-5">
                            <b>NAMA PELAKU USAHA :</b><i>{{ $laporanpengaduan->diadukan->nama_pelaku_usaha }}</i><br>
                            <b>PERUSAHAAN :</b><i>{{ $laporanpengaduan->diadukan->perusahaan }}</i> <br>
                            <b>KODE POS :</b> <i>{{ $laporanpengaduan->diadukan->kode_pos }}</i> <br>
                            <b>ALAMAT :</b> <i>{{ $laporanpengaduan->diadukan->alamat }}</i> <br>
                            <b>TELEPON :</b> <i>{{ $laporanpengaduan->diadukan->telepon }}</i> <br>
                        </div>
                        <div style="margin-top: -20px" class="mb-5">
                            <b>JENIS PRODUK :</b><i>{{ $laporanpengaduan->tentang_diadukan->jenis_produk }}</i><br>
                            <b>MEREK DAGANG :</b><i>{{ $laporanpengaduan->tentang_diadukan->merek_dagang }}</i> <br>
                            <b>TYPE :</b> <i>{{ $laporanpengaduan->tentang_diadukan->type }}</i> <br>
                            <b>JENIS PENGADUAN :</b> <i>{{ $laporanpengaduan->tentang_diadukan->jenis_pengaduan }}</i>
                            <br>
                            <b>SAKSI :</b> <i>{{ $laporanpengaduan->tentang_diadukan->saksi }}</i> <br>
                            <b>TANGGAL :</b> <i>{{ $laporanpengaduan->tentang_diadukan->tanggal }}</i> <br>
                            <b>JAM :</b> <i>{{ $laporanpengaduan->tentang_diadukan->jam }}</i> <br>
                            <b>LOKASI :</b> <i>{{ $laporanpengaduan->tentang_diadukan->lokasi }}</i> <br>
                            <b>BUKTI-BUTI :</b> <a href="{{ $laporanpengaduan->tentang_diadukan->bukti_bukti }}"><i>{{
                                    $laporanpengaduan->tentang_diadukan->bukti_bukti }}</i></a> <br>
                            <b>BUKTI PEMBELIAN :</b> <br> <img width="50%" height="40%"
                                src="{{ asset('storage/'.$laporanpengaduan->tentang_diadukan->bukti_pembelian) }}"
                                alt="fesfh"><br> <br>
                            <b>MATERIAL :</b> {{ $laporanpengaduan->tentang_diadukan->material }} <br>
                            <b>FISIK :</b> <i>{{ $laporanpengaduan->tentang_diadukan->fisik }}</i> <br>
                        </div>
                        <div style="margin-top: -20px" class="mb-5">
                            <b>KRONOLOGIS :</b><i>{{ $laporanpengaduan->jenis_tuntutan->jenis_tuntutan }}</i><br>
                        </div>
                        <div style="margin-top: -20px" class="mb-5">
                            <b>JENIS TUNTUTAN :</b><i>{{ $laporanpengaduan->kronologis->kronologis }}</i><br>
                        </div>
                        <div style="margin-top: -20px" class="mb-5">
                            <b>PERMINTAAN KONSUMEN :</b><i>{{ $laporanpengaduan->permintaan->permintaan }}</i><br>
                        </div>
                        <div style="margin-top: -20px" class="form-group">
                            <b for="status">STATUS</b>
                            <select name="status" id="mySelect" name="randomName" required class="form-control">
                                <option value="{{ $laporanpengaduan->status }}">
                                    <i>Jangan Ubah ({{ $laporanpengaduan->status }})</i>
                                </option>
                                <option value="DiTerima">DiTerima</option>
                                <option value="DiTolak">DiTolak</option>
                            </select>
                        </div>
                        <div class="form-group" id="option2Input" style="display: none;">
                            <label for="keterangan"><b>KETERANGAN</b></label>
                            <textarea name="keterangan"
                                class="blok w-full">{{ $laporanpengaduan->keterangan }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-fw fa-check"></i>
                            Kirim
                        </button>
                        <a href="{{ route('cetak-pdf-laporan-pengaduan', $laporanpengaduan->id) }}" target="_blank"
                            class="btn btn-danger btn-block">
                            <i class="fas fa-fw fa-print"></i>
                            Print PDF
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('add-script')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('keterangan');
</script>
<script>
    var select = document.getElementById('mySelect');

    select.addEventListener('change', function() {

      var selectedValue = this.value;

      if (selectedValue === 'DiTolak') {
        document.getElementById('option2Input').style.display = 'block';
      } else {
        document.getElementById('option2Input').style.display = 'none';
      }
    });
</script>
@endpush
