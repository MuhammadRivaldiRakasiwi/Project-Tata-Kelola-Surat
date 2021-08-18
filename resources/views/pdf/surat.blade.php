<!DOCTYPE html>

<head>
    <title>Contoh Surat Pernyataan</title>
    <meta charset="utf-8">
    <style>
        .tengah {
            text-align: center;
        }

        .garis1 {
            width: 300px;
            margin-top: -20px;
        }

    </style>

</head>

<body>
    <table>
        <tr>
            <td><img src="https://cdn.statically.io/img/cdn3.f-cdn.com//files/download/36223972/tarunabhakti.png"
                    width="90" height="90"></td>
            <td>
                <center>
                    <font size="4">YAYASAN SETYA BHAKTI</font><br>
                    <font size="5"><b>SMK TARUNA BHAKTI</b></font><br>
                    <font size="3">TERAKREDITASI: ”A” No : 02.00/375/BAP-SM/XI/2008 <br>
                        Izin No : 421.4/1150/DISDIK/2004 – NPSN : 20229232</font>
                    <br>
                    <font size="2"><i>Jln. Pekapuran Kel. Curug - Kec. Cimanggis Depok Kode Pos 16953
                            Telp.(021)8744810</i></font>
                </center>
            </td>
        
        </tr>
    </table>
    <hr>


    <h3 style='text-align: center; letter-spacing: 2px;'>SURAT TUGAS</h3>
    <hr class="garis1">
    </hr>
    <p class='tengah' style='margin-top:-18px;'>No. 421.5/065/YSB/SMK.TB/Hubin/2021</p>

    <p style='margin-top:30px;'>Kepala Sekolah Menengah Kejuruan ( SMK ) Taruna Bhakti Cimanggis Depok, dengan ini
        menugaskan kepada :</p>
    
        
    <table style='margin-left:50px;'>
        <tr>
            <td style="width: 30%;">Nama</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{ $surat->petugas->monitoring }}</td>
        </tr>
        <tr>
            <td style="width: 30%;">Jabatan</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{ $surat->jabatan }}</td>
        </tr>
        <tr>
            <td style="width: 30%;">Unit</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">SMK Taruna Bhakti</td>
        </tr>
    </table>

    <p>Untuk melaksanakan tugas Mengantar Peserta Diklat SMK Taruna Bhakti yang telah
        melaksanakan Pratek Kerja Industri (Prakerin) pada :</p>

    <table style='margin-left:50px;'>
        <tr>
            <td style="width: 30%;">Hari</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">Kamis</td>
        </tr>
        <tr>
            <td style="width: 30%;">Tanggal</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{ $surat->petugas->tanggal_pelaksanaan }}</td>
        </tr>
        <tr>
            <td style="width: 30%;">Tempat</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{ $surat->petugas->nama_perusahaan }}</td>
        </tr>
    </table>
    

    <p>Demikian surat tugas ini di buat untuk dapat dilaksanakan dengan penuh tanggung jawab.</p>

    <br>

    <div style="width: 50%; text-align: center; float: right;">Depok, 20 April 2021</div><br>
    <div style="width: 50%; text-align: center; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
    <div style="width: 50%; text-align: center; float: right;">Kepala Sekolah</div>

</body>

</html>
