<!DOCTYPE html>
<head>
    <title>Surat kelahiran {{$permohonan_lahir->nama}}</title>
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
    <div id=halaman>
        <div class="row">
            <div style="float: left; margin-top:30px">
                <img src="{{ public_path('Picture1.jpg') }}" width="110" height="110" alt="Image"/>
            </div>
            <h4 id="judul" style="font-weight:normal">PEMERINTAH KABUPATEN GIANYAR &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h4>
            <h4 id=judul  style="font-weight:normal">KECAMATAN  GIANYAR &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h4>
            <h3 id="judul">DESA  SUMITA  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>
            <h4 id="alamatkop"  style=" font-style: italic">Jl. Raya Sumita , Kode Pos 80511</h4>
            <h3 id="judul" style="margin-top:50px; margin-bottom: 0px;"><u>SURAT KETERANGAN KELAHIRAN</u> </h3>
            <h4 id=judul style="font-weight:normal; margin-top: 2px; margin-bottom:50px" >NOMOR : ............/............./...........</h4>
    
    

        </div>
       
        <p style="margin-bottom: 50px">Yang bertanda tangan dibawah ini Kepala Desa Sumita  Kecamatan Gianyar Kabupaten Gianyar :</p>
        <p>Dengan ini menerangkan bahwa :</p>
        <table style="margin-left: 30px">
            <tr>
                <td style="width: 30%; ">a. Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_lahir->nama}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">b. Tempat/ Tanggal Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_lahir->tempat_lahir}},&#160;&#160; {{ \Carbon\Carbon::parse($permohonan_lahir->tgl_lahir)->format('d/m/Y')}}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">c. Jenis Kelamin</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{$permohonan_lahir->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">d. Alamat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_lahir->alamat}}</td>
            </tr>
        </table>

        <p>Adalah anak dari :</p>
        <table style="margin-left: 50px">
            <tr >
                <td style="width: 30%; ">Nama Ayah Kandung</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_lahir->nama_ayah}}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%;">Nama Ibu Ibu Kandung</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$permohonan_lahir->nama_ibu}}</td>
            </tr>
            <br>
            <tr>
                <td style="width: 30%; vertical-align: top; ">Anak Ke </td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{$permohonan_lahir->anak_ke}}</td>
            </tr>
        </table>
        <br>

        

        <p>Demikian surat keterangan kelahiran ini dibuat untuk dapat dipergunakan seperlunya</p>
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