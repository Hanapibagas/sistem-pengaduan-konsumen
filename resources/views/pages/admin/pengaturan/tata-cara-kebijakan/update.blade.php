@extends('layouts.admin')

@section('title')
Pengaturan Banner
@endsection


@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengaturan banner</h1>
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
            <form action="{{ route('update_kebijakan', $kebijakan->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="banner">Gambar</label><br>
                    <small>Pilih gambar jika ingin mengubah</small>
                    <input value="{{ $kebijakan->kebijakan }}" type="file" class="form-control-file" name="kebijakan">
                    @if ($kebijakan->kebijakan)
                    <img class="mt-3" width="100px" height="100px" src="{{ asset ('storage/'.$kebijakan->kebijakan) }}"
                        alt="Gambar tidak distemukan">
                    @else
                    <p>Gambar tidak tersedia</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('add-script')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
</script>
@endpush
