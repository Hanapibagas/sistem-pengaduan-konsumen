<div style="width: auto; height: auto; border: 1px solid;">
    <div style="margin-top: 0px">
        <img src="{{('frontend/images/logo.png') }}" style="width: 50px; margin-left: 330px; margin-top: 10px" alt=""
            srcset="">
        <h4 style="text-align: center; margin-top: 5px">PEMERINTAH PROVINSI SELAWESI SELATAN</h4>
        <h2 style="text-align: center; margin-top: -23px"><b>DINAS PERDAGANGAN</b></h2>
        <p style="text-align: center; margin-top: -23px">jl.Manunggal 22 No. 40 Maccini Sombala, Tamalate
            Telp.0411-8917345 Makassar 90224</p>
        <h5 style="text-decoration: underline; text-align: center; margin-top: -17px">MAKASSAR 90224</h5>
        <hr style="margin-top: -10">
    </div>

    <div style="margin-left: 5%;">
        <h3 style="text-align: center; margin-top: -3px">FORMULIR PENGADUAN </h3>
        <table>
            <h5>I. IDENTITAS KONSUMEN</h5>
            <tr>
                <td>1. Nama Lengkap</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->pengadu->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>2. Nomor Identitas <br> <span style="margin-left: 15px">(<i>KTP/SIM/Paspor</i>)</span></td>
                <td>:</td>
                <td>{{ $laporanpengaduan->pengadu->no_identitas }}</td>
            </tr>
            <tr>
                <td>3. Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->pengadu->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>4. Alamat Lengkap</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->pengadu->alamat }}</td>
            </tr>
            <tr>
                <td>5. Telpon (Whatsapp)</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->pengadu->telepon }}</td>
            </tr>
        </table>
        <table>
            <h5>II. IDENTITAS PELAKU</h5>
            <tr>
                <td>1. Perusahaan Yang diadukan</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->diadukan->perusahaan }}</td>
            </tr>
            <tr>
                <td>2. Alamat</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->diadukan->alamat }}</td>
            </tr>
            <tr>
                <td>3. No. Telpon</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->diadukan->telepon }}</td>
            </tr>
        </table>
        <table>
            <h5>III. PENGADUAN</h5>
            <tr>
                <td>1. Ringkasan <br><span style="margin-left: 15px">Pengaduan/Kronologis</span></td>
                <td>:</td>
                <td>{{ $laporanpengaduan->kronologis->kronologis }}</td>
            </tr>
            <tr>
                <td>2. Kerugian Konsumen</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->tentang_diadukan->material }}</td>
            </tr>
            <tr>
                <td>3. Jenis Barang/Jasa</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->tentang_diadukan->jenis_produk }}</td>
            </tr>
            <tr>
                <td>4. Permintaan Konsumen</td>
                <td>:</td>
                <td>{{ $laporanpengaduan->permintaan->permintaan }}</td>
            </tr>
        </table>
    </div>

    <div style="display: flex; margin-left: 15%;">
        <div style="margin-left: 2%">
            <p style="margin-left: 55%">.................................</p>
            <h5>Konsumen <span style="margin-left: 40%">Petugas Pelayanan Pengaduan</span></h5><br><br>
            <p style="margin-left: -20px">........................... <span
                    style="margin-left: 40%">.........................</span></p>
        </div>
    </div>

</div>