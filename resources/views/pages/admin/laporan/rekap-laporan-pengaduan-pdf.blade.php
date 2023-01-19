<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Data Laporan Pengadu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal Diterima pengadu</th>
                <th>Nama dan Alamat konsumen</th>
                <th>Nama dan alamat pelaku usaha</th>
                <th>Jasa barang/jasa</th>
                <th>deskrisi singkat/kronologis kasus</th>
                <th>Cara penyelesaian sengketa</th>
                <th>Selesai/Tidak selesai</th>
        </thead>
        <tbody>
            @foreach ( $laporanpengaduan as $file )
            <tr>
                <th>{{ $file->tentang_diadukan->tanggal }}</th>
                <th>
                    {{ $file->pengadu->nama_lengkap }} &
                    {{ $file->pengadu->alamat }}
                </th>
                <th>
                    {{ $file->diadukan->perusahaan }} &
                    {{ $file->diadukan->alamat }}
                </th>
                <th>{{ $file->tentang_diadukan->jenis_produk }}</th>
                <th>{{ $file->kronologis->kronologis }}</th>
                <th>{{ $file->permintaan->permintaan }}</th>
                <th>{{ $file->status }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
