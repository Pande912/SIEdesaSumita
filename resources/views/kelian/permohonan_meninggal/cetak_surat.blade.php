<!DOCTYPE html>
<head>
    <title>Surat kematian &#160; {{$permohonan_meninggal->penduduk->nama}}</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }
        #alamatkop {
         text-align:center;
        border-bottom: 5px solid;
        padding: 0 0 4px;
        }

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 0px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

    </style>

</head>

<body>
    <div class="row">
        <div style="float: left; margin-top:30px">
            <img src="{{ public_path('Picture1.jpg') }}" width="110" height="110" alt="Image"/>
        </div>
        <h4 id="judul" style="font-weight:normal">PEMERINTAH KABUPATEN GIANYAR &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h4>
        <h4 id=judul  style="font-weight:normal">KECAMATAN  GIANYAR &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h4>
        <h3 id="judul">DESA  SUMITA  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
        <h4 id="alamatkop"  style=" font-style: italic">Jl. Raya Sumita , Kode Pos 80511</h4>
        <h3 id="judul" style="margin-top:50px; margin-bottom: 0px;"><u>SURAT KETERANGAN KEMATIAN</u> </h3>
        <h4 id=judul style="font-weight:normal; margin-top: 2px; margin-bottom:50px" >NOMOR : ............/............./...........</h4>



    </div>
        <p style="margin-bottom: 50px">Yang bertanda bertanda tangan dibawah dibawah ini, Kepala Desa Sumita Kecamatan Gianyar Kabupaten Gianyar, menerangkan dengan sebenarnya bahwa:
            </p>
        <table style="margin-left: 30px">
            <tr>
                <td style="width: 30%; ">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_meninggal->penduduk->nama}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat/ Tanggal Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_meninggal->penduduk->tempat_lahir}},&#160;&#160; {{ \Carbon\Carbon::parse($permohonan_meninggal->penduduk->tgl_lahir)->format('d/m/Y')}}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Jenis Kelamin</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{$permohonan_meninggal->penduduk->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Pekerjaan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_meninggal->penduduk->pekerjaan}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_meninggal->penduduk->alamat}}</td>
            </tr>
        </table>

        <p>Orang yang namanya tersebut diatas adalah benar warga Desa Sumita dan telah Meninggal Dunia, yaitu  :</p>
        <table style="margin-left: 50px">
            <tr >Kandung
                <td style="width: 30%; ">Tanggal </td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ \Carbon\Carbon::parse($permohonan_meninggal->tgl_meninggal)->format('d/m/Y')}}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%;">Meninggal Karena</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_meninggal->keterangan}}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%;">Di</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_meninggal->tempat_meninggal}}</td>
            </tr>
        </table>
        <br>

        

        <p>Demikian surat keterangan kematian ini dibuat dengan sebenarnya, untuk dapat dipergunakan seperlunya</p>
        <br>
        <table style="margin-left: 450px">
            <tr >
                <td style="width: 30%; ">&#160;&#160;&#160;……, ….. …..</td>
            </tr>
            <tr>
                <td style="width: 30%;">&#160;&#160;&#160; Kepala Desa Sumita</td>
            </tr>
            <br>
            
            <br><br><br>
            <tr>
                <td style="width: 30%; vertical-align: top; ">(..........................................)</td>
            </tr>
        </table>

        

    </div>
</body>

</html>