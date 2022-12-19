@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Tambah Opsi Pertanyaan</h1>
    </div>

    @if ( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Pertanyaan</label>
                        <select name="pertanyaan_id" type="text" class="form-control">
                            <option value="">Silahkann memilih pertanyaan.</option>
                            @foreach ( $opsi as $opsi )
                                <option value="{{ $opsi->id }}">
                                    {{ $opsi->pertanyaan }}
                                </option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="title">Opsi</label>
                    <input type="text" class="form-control" name="option" placeholder="Tidak Sesuai">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="option" placeholder="Kurang Sesuai">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="option" placeholder="Sesuai">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="option" placeholder="Sangat Sesuai">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
        </form>
        </div>
    </div>
</div>

@endsection
