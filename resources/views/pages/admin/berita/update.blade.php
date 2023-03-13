@extends('layouts.admin')

@section('title')
Berita
@endsection


@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah berita</h1>
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
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="{{ $berita->title }}" type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input value="{{ $berita->tanggal }}" type="date" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="blok w-full">{{ $berita->deskripsi }}"</textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label><br>
                    <small>Pilih gambar jika ingin mengubah</small>
                    <input value="{{ $berita->gambar }}" type="file" class="form-control" name="gambar">
                    @if ($berita->gambar)
                    <img class="mt-3" width="100px" height="100px" src="{{ asset ('storage/'.$berita->gambar) }}"
                        alt="fesfh">
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
