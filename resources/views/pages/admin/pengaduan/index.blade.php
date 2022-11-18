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
            Daftar Pengaduan
        </h1>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Bukti Diri</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $items as $pengadu )
                        <tr>
                            <th>{{ $pengadu->id }}</th>
                            <th>{{ $pengadu->nama }}</th>
                            <th>{{ $pengadu->umur }}</th>
                            <th>{{ $pengadu->jenis_kelamin }}</th>
                            <th>{{ $pengadu->alamat }}</th>
                            <th>{{ $pengadu->telepon }}</th>
                            <th><img width="50px" height="70px" src="{{ asset ('storage/'.$pengadu->bukti_diri) }}" alt="fesfh"></th>
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
