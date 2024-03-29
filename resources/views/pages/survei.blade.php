@extends('layouts.app')

@section('title')
Survei
@endsection

@push('add-styleFe')

@endpush

@section('content')
<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="{{ route('index') }}" style="color: whitesmoke">Beranda</a></li>
            <li>Survei</li>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="r-bg-x pb120">
        <div class="container w-992">
            <div class="blog-details">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sol-img mt60"></div>
                        <div class="ree-blog-details">
                            <form action="{{ route('proses_survei') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap <i class="text-danger"
                                            style="font-size: 14px;">*</i></label>
                                    <input type="text" class="form-control" name="nama" @error('nama') is-invalid
                                        @enderror" name="nama" autocomplete="off" autofocus>
                                    @if($errors->has('nama'))
                                    <span class="form-text text-muted text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin <i class="text-danger"
                                            style="font-size: 14px;">*</i></label>
                                    <div class="form-check">
                                        <input class="form-check-input" name="jenis_kelamin" type="radio"
                                            value="Laki-laki" id="Laki-laki" checked>
                                        <label class="form-check-label" for="Laki-laki">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="jenis_kelamin" type="radio"
                                            value="Perempuan" id="Perempuan">
                                        <label class="form-check-label" for="Perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                    @if($errors->has('jenis_kelamin'))
                                    <span class="form-text text-muted text-danger">{{ $errors->first('jenis_kelamin')
                                        }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for=""> Pekerjaan <i class="text-danger"
                                            style="font-size: 14px;">*</i></label>
                                    <div class="form-check">
                                        <input class="form-check-input" name="pekerjaan" type="radio"
                                            value="Pelajar/Mahasiswa" id="Mahasiswa" checked>
                                        <label class="form-check-label" for="Mahasiswa">
                                            Pelajar/Mahasiswa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="pekerjaan" type="radio" value="PNS"
                                            id="PNS">
                                        <label class="form-check-label" for="PNS">
                                            PNS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="pekerjaan" type="radio" value="TNI"
                                            id="TNI">
                                        <label class="form-check-label" for="TNI">
                                            TNI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="pekerjaan" type="radio" value="POLRI"
                                            id="POLRI">
                                        <label class="form-check-label" for="POLRI">
                                            POLRI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="pekerjaan" type="radio" value="BUMN"
                                            id="BUMN">
                                        <label class="form-check-label" for="BUMN">
                                            BUMN
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="pekerjaan" type="radio" value="Pegawai"
                                            id="Pegawai">
                                        <label class="form-check-label" for="Pegawai">
                                            Pegawai Swasta
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="pekerjaan" type="radio" value="Wiraswasta"
                                            id="Wiraswasta">
                                        <label class="form-check-label" for="Wiraswasta">
                                            Wiraswasta
                                        </label>
                                    </div>
                                    @if($errors->has('pekerjaan'))
                                    <span class="form-text text-muted text-danger">
                                        {{ $errors->first('pekerjaan') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <i class="text-danger"
                                            style="font-size: 14px;">*</i></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" autocomplete="off">
                                    @if($errors->has('email'))
                                    <span class="form-text text-muted text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <h3><b>Pertanyaan - Pertanyaan Kuesioner</b></h3>
                                    <div style="overflow: scroll; height:400px;">
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($pertanyaan as $value)
                                        <div class="form-group">
                                            <p style="font-size: 20px;"><b>{{ $no }}. </b> {{ $value->pertanyaan }} <br>
                                            <div style="margin-left:30px;">
                                                @php
                                                $opsipertanyaan =
                                                App\Models\PilihanPertanyaan::where('pertanyaan_id','=',$value->id)->get();
                                                @endphp
                                                @foreach($opsipertanyaan as $option)
                                                <input type="radio" name="jawab_{{ $no }}" value="{{ $option->id }}"> {{
                                                $option->opsi }}<br>
                                                @endforeach
                                            </div>
                                            </p>
                                            <hr>
                                        </div>
                                        @php
                                        $no++;
                                        @endphp
                                        @endforeach
                                        <div class="form-group">
                                            <p style="font-size: 20px;">Tuliskan komentar/usulan Saudara terhadap
                                                kemajuan dan pengembangan
                                                pelayanan
                                                kepuasan masyarakat </p>
                                            <textarea name="saran" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <br><br>
                                    <button type="submit" class="btn btn-success"> Kirim </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

@endsection