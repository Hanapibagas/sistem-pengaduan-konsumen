@extends('layouts.app')

@section('title')
    Beranda
@endsection

@section('content')
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <div class="carousel-inner">
            <img class="img" src="{{ asset('frontend/images/slider/banner3.png') }}" alt="">
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
              <a href="{{ route('pantau-pengaduan.index') }}"><h2>PANTAU STATUS PENGADUAN</h2></a>
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
{{--
  <div class="lates">
    <div class="container">
      <div class="text-center">
        <h2>Lates News</h2>
      </div>
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="{{ asset('frontend/images/4.jpg') }}" class="img-responsive" />
        <h3>Template built with Twitter Bootstrap</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <img src="{{ asset('frontend/images/4.jpg') }}" class="img-responsive" />
        <h3>Template built with Twitter Bootstrap</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <img src="{{ asset('frontend/images/4.jpg') }}" class="img-responsive" />
        <h3>Template built with Twitter Bootstrap</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div>
    </div>
  </div> --}}

  {{-- <section id="partner">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Our Partners</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>

      <div class="partners">
        <ul>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
          <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
        </ul>
      </div>
    </div>
  </section> --}}
@endsection
