@extends('layouts.admin')

@section('title')
Detail Survei
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card-body" style="margin-top: -20px">
            <div class="col-sm-12 col-lg-12">
                <div class="text-center">
                    <h4 class="mb-3">DETAIL DATA SURVEI</h4>
                    <span style="float: right;"><a href="{{ route('survei-index') }}" class="btn btn-sm btn-primary"><i
                                class="fa fa-undo"></i> kembali</a></span><br>
                </div>
                <form>
                    <div class="form-group row">
                        <label class="col-md-2">Nama</label>
                        <div class="col-md-10" style="margin-bottom: 15px;">
                            : {{ $result->nama }}
                        </div>
                        <label class="col-md-2">Email</label>
                        <div class="col-md-10" style="margin-bottom: 15px;">
                            : {{ $result->email }}
                        </div>
                        <label class="col-md-2">Pekerjaan</label>
                        <div class="col-md-10" style="margin-bottom: 15px;">
                            : {{ $result->pekerjaan }}
                        </div>
                        <label class="col-md-2">Jenis Kelamin</label>
                        <div class="col-md-10" style="margin-bottom: 15px;">
                            : {{ $result->jenis_kelamin }}
                        </div>
                        <label class="col-md-2">Saran</label>
                        <div class="col-md-10" style="margin-bottom: 15px;">
                            : {{ $result->saran }}
                        </div>
                        <div class="col-md-12">
                            @php
                            $pertanyaans = App\Models\Pertanyaan::all();
                            $no = 1
                            @endphp
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        @foreach ( $pertanyaans as $pertanyaan )
                                        <tr>
                                            <th scope="row">{{ $no }}</th>
                                            <td>{{ $pertanyaan->pertanyaan }}</td>
                                            <td>
                                                @php
                                                $hasil = App\Models\Survei::where([
                                                ['pertanyaan_id', '=', $no],
                                                ['repon_id', '=', $result->id],
                                                ])->first();
                                                $jawab = App\Models\PilihanPertanyaan::where('id', '=',
                                                $hasil->jawaban)->first();
                                                @endphp
                                                {{ $jawab->opsi }}
                                            </td>
                                        </tr>
                                        @php
                                        $no++
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection