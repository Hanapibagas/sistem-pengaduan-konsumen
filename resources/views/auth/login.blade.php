@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
<div id="breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
			<li>Login</li>
		</div>
	</div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"><br><br>
                <div class="card-body" sty>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color: black">{{ __('Email Address') }} <span style="color: red">*</span></label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color: black">{{ __('Password') }} <span style="color: red">*</span></label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember" style="color: black">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Apakah Anda belum mempunyai akun ?') }}
                                    </a>
                                @endif
                            </div>
                        </div><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
