@extends('layouts.app')

@section('title')
Beranda
@endsection

@section('content')
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <div class="carousel-inner">
            <img class="img" src="{{ asset ('storage/'.$banner->banner) }}"" alt="">
        </div>
    </div>
</section>

<div class=" feature">
            <div class="container">
                <div class="text-center">
                    <h2>Layanan</h2>
                    <div class="col-md-3">
                        <a href="{{ route('registrasi-pengadu.index') }}">
                            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="300ms">
                                <i class="fa fa-book"></i>
                                <h2>REGISTRASI</h2>
                            </div>
                        </a>
                    </div>
                    @guest
                    <div class="col-md-3">
                        <a href="{{ route('informasi-pengadu-guest') }}">
                            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="900ms">
                                <i class="fa fa-heart-o"></i>
                                <h2>KIRIM PENGADUAN</h2>
                            </div>
                        </a>
                    </div>
                    @endguest
                    @auth
                    <div class="col-md-3">
                        <a href="{{ route('kirim-pengadu') }}">
                            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="900ms">
                                <i class="fa fa-heart-o"></i>
                                <h2>KIRIM PENGADUAN</h2>
                            </div>
                        </a>
                    </div>
                    @endauth
                    @guest
                    <div class="col-md-3">
                        <a href="{{ route('informasi-status-pengadu-guest') }}">
                            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="600ms">
                                <i class="fa fa-laptop"></i>
                                <h2>PANTAU STATUS PENGADUAN</h2>
                            </div>
                        </a>
                    </div>
                    @endguest
                    @auth
                    <div class="col-md-3">
                        <a href="{{ route('informasi-status-pengadu') }}">
                            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="600ms">
                                <i class="fa fa-laptop"></i>
                                <h2>PANTAU STATUS PENGADUAN</h2>
                            </div>
                        </a>
                    </div>
                    @endauth
                    <div class="col-md-3">
                        <a target="_blank" href="https://wa.me/6281234506967">
                            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms"
                                data-wow-delay="1200ms">
                                <i class="fa fa-cloud"></i>
                                <h2>CUSTOMER SERVICE</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="about">
            <div class="container">
                <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2 style="margin-top: -30px; font-size: 50px">Tips</h2>
                    <img src="{{ asset('frontend/images/tips-konsumen/1.png') }}" class="img-responsive" />
                </div>
                <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"><br><br><br>
                    <img style="margin-top: -20px" src="{{ asset('frontend/images/tips-konsumen/2.png') }}"
                        class="img-responsive" />
                </div>
                <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"><br><br><br>
                    <img style="margin-top: -80px" src="{{ asset('frontend/images/tips-konsumen/3.png') }}"
                        class="img-responsive" />
                </div>
                <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"><br><br><br>
                    <img style="margin-top: -80px" src="{{ asset('frontend/images/tips-konsumen/4.png') }}"
                        class="img-responsive" />
                </div>
            </div>
        </div>

        <section class="feature">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="sol-img m-mt30">
                            <img style="width: 80%" src="{{ asset('frontend/images/survie/team-business.jpg') }}"
                                alt="survei" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="pera-block ml50">
                            <h2><span class="ree-tt" style="font-size: 120%">Survei Kepuasan Masyarakat</span></h2>
                            <p style="font-size: 15px">Pemerintah berupaya meningkatkan kualitas pelayanan masyarakat
                                demi
                                tercapainya harapan dan tuntutan publik sesuai Keputusan Menteri Pendayagunaan Aparatur
                                Negara
                                Nomor 14 Tahun 2017 tentang Pedoman Umum Penyusunan Survei Kepuasan Masyarakat Unit
                                Penyelenggara Pelayanan Publik. Mengacu pada hal tersebut, maka Tim Survei dan Pengolah
                                Data
                                Survei Kepuasan Masyarakat (SKM) UPT BPMPP telah melakukan pengukuran Survei Kepuasaan
                                Masyarakat terhadap pelayanan Pengujian Hasil Perikanan</p>
                            <a href="{{ route('daftar-survei') }}" class="btn btn-block btn-primary mt-3"> Mulai
                                Survei</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
