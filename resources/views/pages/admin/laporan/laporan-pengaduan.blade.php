@extends('layouts.admin')

@section('title')
    Daftar Laporan Pengaduan
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
                            <th>Nama Pengadu</th>
                            <th>Email</th>
                            <th>Perusahaan Yang diadukan</th>
                            <th>Tanggal Diadukan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                    </thead>
                    <tbody>
                        @forelse ( $laporanpengaduan as $file )
                        <tr>
                            <th>{{ $file->pengadu->nama_lengkap }}</th>
                            <th>{{ $file->user->email }}</th>
                            <th>{{ $file->diadukan->perusahaan }}</th>
                            <th>{{ $file->tentang_diadukan->tanggal }}</th>
                            <th>{{ $file->status }}</th>
                            <th>
                                <a href="{{ route('detail-laporan-pengaduan', $file->id) }}" class="btn btn-info">
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
