@extends('layouts.admin')

@section('title')
Daftar Laporan Pengaduan
@endsection

@push('add-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css" />
@endpush

@section('content')
<div class="container-fluid">
    <div class="card p-4 border-0">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Laporan Pengadu
            </h1>
        </div>

        <small><i>*fitur untuk filter laporan</i></small>
        <form action="{{ route('cari-data-laporan-pengaduan') }}" method="POST">
            <div class="row">
                @csrf
                <div class="form-group col-md-2">
                    <select id="inputState" class="form-control" name="bulan">
                        <option selected>Bulan...</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    @php
                    $year = date('Y');
                    @endphp
                    <select id="inputState" class="form-control" name="tahun">
                        <option value="pilih tahun..">Pilih tahun</option>
                        @for ($i=2023; $i <= $year; $i++) <option value="{{ $i }}"> {{ $i }} </option>
                            @endfor
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">
                        <i class="fas fa-fw fa-search"></i>
                        Filter
                    </button>
                </div>
            </div>
        </form>

        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-stripped" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Tanggal Diterima pengadu</th>
                            <th>Nama dan Alamat konsumen</th>
                            <th>Nama dan alamat pelaku usaha</th>
                            <th>Jasa barang/jasa</th>
                            <th>deskrisi singkat/kronologis kasus</th>
                            <th>Cara penyelesaian sengketa</th>
                            <th>Selesai/Tidak selesai</th>
                            <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ( $laporanpengaduan as $file )
                        <tr>
                            <th>{{ $file->tentang_diadukan->tanggal }}</th>
                            <th>
                                {{ $file->pengadu->nama_lengkap }} &
                                {{ $file->pengadu->alamat }}
                            </th>
                            <th>
                                {{ $file->diadukan->perusahaan }} &
                                {{ $file->diadukan->alamat }}
                            </th>
                            <th>{{ $file->tentang_diadukan->jenis_produk }}</th>
                            <th>{{ $file->kronologis->kronologis }}</th>
                            <th>{{ $file->permintaan->permintaan }}</th>
                            <th>{{ $file->status }}</th>
                            <th>
                                <a href="{{ route('detail-laporan-pengaduan', $file->id) }}" class="btn btn-info">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><br>

        <small><i>*fitur untuk cetak laporan</i></small>
        <form class="pdf" action="{{ route('cetak-rekap-laporan-pengaduan-pdf') }}" target="_blank" method="POST">
            <div class="row">
                @csrf
                <div class="form-group col-md-2">
                        <select id="inputState" class="form-control" name="bulan">
                            <option selected>Bulan...</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    @php
                    $year = date('Y');
                    @endphp
                    <select id="inputState" class="form-control" name="tahun">
                        <option value="pilih tahun..">Pilih tahun</option>
                        @for ($i=2023; $i <= $year; $i++) <option value="{{ $i }}"> {{ $i }} </option>
                            @endfor
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-danger mb-2">
                        <i class="fas fa-fw fa-print"></i>
                        Print PDF
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('add-script')
<script>
    $(document).ready( function () {
        $('#myTable').dataTable( {
} );
    } );


</script>
@endpush
