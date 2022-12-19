@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Tambah Pertanyaan</h1>
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
            <form action="{{ route('kirim-pertanyaan') }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Pertanyaan</label>
                    <input type="text" class="form-control" name="pertanyaan">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
        </form>
        </div>
    </div>
</div>

@endsection
