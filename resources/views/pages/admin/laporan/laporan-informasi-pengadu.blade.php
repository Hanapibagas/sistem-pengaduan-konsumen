@extends('layouts.admin')

@section('title')
    Daftar Infromasi Pengadu
@endsection

@push('add-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css"/>
@endpush

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Laporan Informasi
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
                            <th>Informasi</th>
                    </thead>
                    <tbody>
                        @forelse ( $informasipegaduan as $file )
                        <tr>
                            <th>{{ $file->id }}</th>
                            <th>{{ $file->User->name }}</th>
                            <th>{!! $file->informasi_pengaduan !!}</th>
                            {{-- <th>
                                <a href="{{ route('laporan.show', $file->id) }}" class="btn btn-info">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </th> --}}
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
        $('#myTable').DataTable({
    });
    } );
</script>
@endpush
