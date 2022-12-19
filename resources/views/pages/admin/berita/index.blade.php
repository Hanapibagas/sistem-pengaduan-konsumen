@extends('layouts.admin')

@section('title')
    Daftar Pengaduan
@endsection

@push('add-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css"/>
@endpush

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Daftar Yang Diadukan Pelaku Usaha
        </h1>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pemilik</th>
                            <th>Pereusahaan</th>
                            <th>Alamat</th>
                            <th>Kode Pos</th>
                            <th>Telepon</th>
                            <th>faximile</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $items as $diadukan )
                        <tr>
                            <th>{{ $diadukan->id }}</th>
                            <th>{{ $diadukan->nama_pemilik }}</th>
                            <th>{{ $diadukan->perusahaan }}</th>
                            <th>{{ $diadukan->alamat }}</th>
                            <th>{{ $diadukan->kode_pos }}</th>
                            <th>{{ $diadukan->telepon }}</th>
                            <th>{{ $diadukan->faximile }}</th>
                        </tr>
                        @empty
                        <tr>
                            <th class="text-center" colspan="7">
                                Data Kosong
                            </th>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('add-script')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endpush
