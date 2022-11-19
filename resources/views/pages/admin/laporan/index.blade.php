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
            Laporan Pengadu
        </h1>
    </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pengadu</th>
                            <th>Perusahaan Yang diadukan</th>
                            <th>Tanggal Diadukan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                    </thead>
                    <tbody>
                        @forelse ( $items as $pengadu )
                        <tr>
                            <th>{{ $pengadu->id }}</th>
                            <th>{{ $pengadu->pengadu->nama }}</th>
                            <th>{{ $pengadu->diadukan->perusahaan }}</th>
                            <th>{{ $pengadu->tentang_diadukan->tanggal }}</th>
                            <th>{{ $pengadu->status }}</th>
                            <th>
                                <a href="{{ route('laporan.show', $pengadu->id) }}" class="btn btn-info">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </th>
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
            // ajax: {
            //     url: '{!! url()->current() !!}'
            // },
            // columns: [
            //     {data: 'id', name: 'id'},
            //     {data: 'pengadu_id', name: 'pengadu_id'},
            //     {data: 'pengadu_id', name: 'pengadu_id'},
            //     {data: 'tentang_diadukan_id', name: 'tentang_diadukan_id'},
            //     {data: 'status  ', name: 'status  '},
            //     {
            //         data: 'action',
            //             name: 'action',
            //             orderable: 'false',
            //             searchable: 'false',
            //             width: '25%'
            //     },
            // ]
    });
    } );
</script>
@endpush
