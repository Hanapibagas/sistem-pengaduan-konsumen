@extends('layouts.app')

@section('title')
Tata Cara Pengaduan
@endsection

<style>
    .tag {
        text-align: center;
    }
</style>

@section('content')
<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
            <li>Kebijakan</li>
        </div>
    </div>
</div>

<div class="tag">
    <h3 style="font-size: 50px"><b>REGULASI</b></h3>
</div>

<div class="container">
    <div class="regulasi">
        <h4>
            1. <i>Undang-Undang Nomor 8 Tahun 1999 tentang Perlindungan konsumen.</i> <br>
            2. <i>Undang-Undang Nomor 7 Tahun 2014 tentang Perdagangan.</i> <br>
            3. <i>Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah.</i> <br>
            4. <i>Peraturan Pemerintah Nomor 59 Tahun 2001 tentang Lembaga Perlindungan Konsumen Swadaya Masyarakat.</i>
            <br>
            5. <i>Peraturan Menteri Perdagangan Nomor 89 Tahun 2001 tentang tempat Lembaga Perlindungan Konsumen Swadaya
                Masyarakat.</i> <br>
            6. <i>Permendag Nomor 72 Tahun 2017 tentang Badan Penyelesaian Sengketa Konsumen.</i> <br>
            7. <i>Peraturan Menteri Perdagangan Republik Indonesia Nomor 36 Tahun 2018 tentang Pelaksanaan Pengawasan
                Kegiatan Perdagangan.</i> <br>
            8. <i>Permendag Nomor 35 Tahun 2021 tentang Tata cara Pendaftaran dan Pembatalan Pendaftaran Lembaga
                Perlindungan Konsumen Swadaya.</i> <br>
            9. <i>Peraturan Menteri Perdagangan RI Nomor 1526 tahun 2002 tentang Pendoman Pengaduan Konsumen.</i> <br>
            10. <i>Peraturan Daerah Provinsi Sulawesi Selatan Nomor 3 tahun 2013 tentang Penyelenggara Perlindungan
                Konsumen.</i> <br>
            11. <i>Peraturan Gubernur Sulawesi Selatan Nomor 68 tahun 2015 tentang Penyelenggara Perlindungan Konsumen
                Peraturan Daerah Provinsi Sulawesi Selatan Nomor 3 tahun 2013 tentang Penyelenggaraan Perlindungan
                Konsumen.</i>
        </h4>
    </div>
</div><br>
@endsection
