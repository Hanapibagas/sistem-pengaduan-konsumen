@extends('layouts.app')

@section('title')
    Data Diri
@endsection

@push('add-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css"/>
@endpush

@section('content')
<div id="breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
			<li>Form pantau pengaduan</li>
		</div>
	</div>
</div><br>

<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 style="color: blac; margin-top: -10px"  class="h3 mb-0 text-gray-800">
            Laporan Pengadu
        </h1><br>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-stripped">
                    <thead>
                        <tr>
                            <th style="color: black; text-align: center">Nama Pengadu</th>
                            <th style="color: black; text-align: center">Perusahaan Yang diadukan</th>
                            <th style="color: black; text-align: center">Tanggal Diadukan</th>
                            <th style="color: black; text-align: center">Keterangan</th>
                            <th style="color: black; text-align: center">Status</th>
                    </thead>
                    <tbody>
                        @forelse ( $pantaulaporan as $pengadu )
                        <tr>
                            <th style="color: black; text-align: center">{{ $pengadu->pengadu->nama_lengkap }}</th>
                            <th style="color: black; text-align: center">{{ $pengadu->diadukan->nama_pelaku_usaha }}</th>
                            <th style="color: black; text-align: center">{{ $pengadu->tentang_diadukan->created_at }}</th>
                            <th style="color: black; text-align: center">{{ $pengadu->status }}</th>
                            <th style="color: black; text-align: center">{!! $pengadu->keterangan !!}</th>
                        </tr>
                        @empty
                        <tr>
                            <th class="text-center" colspan="7">
                                Data Kosong
                            </th>
                        </tr>
                        @endforelse
                    </tbody>
                </table><br>
            </div>
        </div>
    </div>
</div><br>
@endsection

@push('add-script')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
    });
    } );
</script>
@endpush
