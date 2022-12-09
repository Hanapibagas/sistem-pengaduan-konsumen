@extends('layouts.app')

@section('title')
    Beranda
@endsection

@section('content')
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <div class="carousel-inner">
            <img class="img" src="{{ asset('frontend/images/slider/banner 3.png') }}" alt="">
        </div>
    </div>
</section>

<div class="feature">
    <div class="container">
      <div class="text-center">
        <h2>Layanan</h2>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i class="fa fa-book"></i>
            <a href="{{ route('register') }}"><h2>REGISTRASI</h2></a>
          </div>
        </div>
        @guest
        <div class="col-md-3">
            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <i class="fa fa-laptop"></i>
              <a href="{{ route('pantau-pengaduan.guest') }}"><h2>PANTAU STATUS PENGADUAN</h2></a>
            </div>
          </div>
        @endguest
        @auth
        <div class="col-md-3">
            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <i class="fa fa-laptop"></i>
              <a href="{{ route('show-pengadu') }}"><h2>PANTAU STATUS PENGADUAN</h2></a>
            </div>
          </div>
        @endauth
        @guest
        <div class="col-md-3">
            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
              <i class="fa fa-heart-o"></i>
              <a href="{{ route('info-register.index') }}"><h2>KIRIM PENGADUAN</h2></a>
            </div>
          </div>
        @endguest
        @auth
        <div class="col-md-3">
            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
              <i class="fa fa-heart-o"></i>
              <a href="{{ route('data-diri.index') }}"><h2>KIRIM PENGADUAN</h2></a>
            </div>
          </div>
        @endauth
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <i class="fa fa-cloud"></i>
            <a href=""><h2>CUSTOMER SERVICE</h2></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about">
    <div class="container">
      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h2>Tips</h2>
        <img src="{{ asset('frontend/images/tips_konsumen_cerdas.png') }}" class="img-responsive" />
      </div>

      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"><br><br><br><br>
            <img src="{{ asset('frontend/images/tips_belanja_online.png') }}" class="img-responsive" />
      </div>
    </div>
  </div>
@endsection
