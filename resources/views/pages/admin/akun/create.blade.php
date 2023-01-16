@extends('layouts.admin')

@section('title')
    Pengguna
@endsection


@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah akun pengguna</h1>
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
            <form action="{{ route('register-pengguna-akun') }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end" style="color: black">{{ __('Email Address') }} <span style="color: red">*</span></label>
                    <div class="col-md-6">
                        <select id="select-state" placeholder="Silahkan pilih email kabupaten" name="email" class="form-control input-sm select2">
                            <option value=""></option>
                            <option value="soppeng@gmail.com">soppeng@gmail.com</option>
                            <option value="takalar@gmail.com">takalar@gmail.com</option>
                            <option value="tanahtoraja@gmail.com">tanahtoraja@gmail.com</option>
                            <option value="torajautara@gmail.com">torajautara@gmail.com</option>
                            <option value="wajo@gmail.com">wajo@gmail.com</option>
                            <option value="makassar@gmail.com">makassar@gmail.com</option>
                            <option value="palopo@gmail.com">palopo@gmail.com</option>
                            <option value="parepare@gmail.com">parepare@gmail.com</option>
                            <option value="luwutimur@gmail.com">luwutimur@gmail.com</option>
                            <option value="luwuutara@gmail.com">luwuutara@gmail.com</option>
                            <option value="maros@gmail.com">maros@gmail.com</option>
                            <option value="pangkep@gmail.com">pangkep@gmail.com</option>
                            <option value="pinrang@gmail.com">pinrang@gmail.com</option>
                            <option value="kepulauanselayar@gmail.com">kepulauanselayar@gmail.com</option>
                            <option value="sidrap@gmail.com">sidrap@gmail.com</option>
                            <option value="sinjai@gmail.com">sinjai@gmail.com</option>
                            <option value="barru@gmail.com">barru@gmail.com</option>
                            <option value="bone@gmail.com">bone@gmail.com</option>
                            <option value="bulukumba@gmail.com">bulukumba@gmail.com</option>
                            <option value="enrekang@gmail.com">enrekang@gmail.com</option>
                            <option value="gowa@gmail.com">gowa@gmail.com</option>
                            <option value="luwu@gmail.com">luwu@gmail.com</option>
                            <option value="bantaeng@gmail.com">bantaeng@gmail.com</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end" style="color: black">{{ __('Roles') }} <span style="color: red">*</span></label>
                    <div class="col-md-6">
                        <select name="roles" class="form-control input-sm select2">
                            <option value="">Pilih role sebagai apa ?</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="USER">USER</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Kirim
                </button>
        </form>
        </div>
    </div>
</div>
@endsection

@push('add-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('select').selectize({
      sortField: 'text'
  });
});
</script>
@endpush

