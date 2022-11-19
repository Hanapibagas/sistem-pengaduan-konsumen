@extends('layouts.admin')

@section('title')
    Detail Laporan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-body">
                    <div class="text-center">
                        <h4 class="mb-3">Detail Pelaporan</h4>
                            <span style="float: right;"><a href="http://127.0.0.1:8000/pimpinan/permohonan" class="btn btn-sm btn-primary"><i class="fa fa-undo"></i>kembali</a></span>
                    </div>
                    <form>
                        <div class="mb-5">
                            <b>Detail Pelaporan</b><br>
                            <b>Nama :</b> value="{{ $pengadu->nama }}"<br>
                            <b>Nama :</b>b PT. Phillips Seafood Indonesia-Sulawesi <br>
                            <b>Hp/Telp :</b> 0811410105 <br>
                            <b>Alamat :</b> Barru <br>
                            <b>Jenis Sampel :</b> Frozen Whole Cooked Crab (FCC) <br>
                            <b>Spesies :</b> Portubus pelagicus <br>
                            <b>Kode Sampel :</b> Januari 06, 2022 <br>
                            <b>Negara Tujuan :</b> US <br>
                            <b>Jumlah Sampel :</b> 1 bungkus <br>
                            <b>Tanggal Penjemputan :</b> 07-01-2022 <br>
                            <b>Tanggal Pengujian :</b> 06-01-2022 <br>
                        </div>
                        <h5>Hasil Pengujian</h5>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr class="table-success" style="text-align: center;">
                                        <th scope="col" rowspan="2">No.</th>
                                        <th scope="col" rowspan="2">Parameter</th>
                                        <th scope="col" colspan="5"><span style="font-style: text-decoration: underline; font-style: italic;">Result</span><br>Hasil</th>
                                        <th scope="col" rowspan="2"><span style="font-style: text-decoration: underline; font-style: italic;">Limit of Quality</span><br>Batas Standar Mutu</th>
                                        <th scope="col" rowspan="2"><span style="font-style: text-decoration: underline; font-style: italic;">Test Methods</span><br>Metode Uji</th>
                                    </tr>
                                    <tr class="table-success" style="text-align: center;">
                                        <th scope="col">1</th>
                                        <th scope="col">2</th>
                                        <th scope="col">3</th>
                                        <th scope="col">4</th>
                                        <th scope="col">5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                                                                                            <tr style="text-align: center;">
                                        <th scope="row">1</th>
                                        <td>Mercury (Hg)</td>
                                                                                                                                <td>0,0786 mg/kg</td>
                                                                                    <td>0,0797 mg/kg</td>
                                                                                    <td>0,0748 mg/kg</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>0.50 mg/kg</td>
                                        <td>SNI 2354.6:2016</td>
                                    </tr>
                                                                                                                                                            <tr style="text-align: center;">
                                        <th scope="row">2</th>
                                        <td>Plumbum (Pb)</td>
                                                                                                                                <td>0,0145 mg/kg</td>
                                                                                    <td>0,0149 mg/kg</td>
                                                                                    <td>0,0144 mg/kg</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>0.50 mg/kg</td>
                                        <td>SNI 2354.5:2011</td>
                                    </tr>
                                                                                                                                                            <tr style="text-align: center;">
                                        <th scope="row">3</th>
                                        <td>Listeria monocytogenes</td>
                                                                                                                                <td>Negatif/25 g</td>
                                                                                    <td>Negatif/25 g</td>
                                                                                    <td>Negatif/25 g</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>Negatif/25 g</td>
                                        <td>Elisa</td>
                                    </tr>
                                                                                                                                                            <tr style="text-align: center;">
                                        <th scope="row">4</th>
                                        <td>Cadmium (Cd)</td>
                                                                                                                                <td>0,0358 mg/kg</td>
                                                                                    <td>0,0350 mg/kg</td>
                                                                                    <td>0,0329 mg/kg</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>0.50 mg/kg</td>
                                        <td>SNI 2354.5:2011</td>
                                    </tr>
                                                                                                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
