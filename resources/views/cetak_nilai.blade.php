<style>
    .text{
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 1px;
    }

    .table thead tr th {
        border: 1px;
        text-align: center;
    }

    .table tbody tr td {
        border: 1px;
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/svg/logo.svg" type="image/x-icon">

    <title>Document</title>
</head>
<body>
    <p style="text-align: right;">Rahasia</p>
    <img src="../public/img/logo/logo.png" width="200px" type="image" alt="">
    <hr>
    <table>
        <tr>
            <td>Nama</td>
            <td>: {{ $profile->nama_ktp }}</td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>: {{ $profile->id }}</td>
        </tr>
        <tr>
            <td>Bagian</td>
            <td>: {{ $profile->bagian }}</td>
        </tr>
        <tr>
            <td>Periode Penilaian</td>
            <td>: On progres</td>
        </tr>
    </table>
    <hr>
    <div class="text">I. Absensi dan keterlambatan</div>
    <table>
        @foreach ($absen as $abs)    
        <tr>
            <td>Datang awal</td>
            <td>: {{ $abs->datangawal }}</td>
        </tr>
        <tr>
            <td>Datang ontime</td>
            <td>: {{ $abs->ontimemasuk }}</td>
        </tr>
        <tr>
            <td>Datang telat</td>
            <td>: {{ $abs->datangtelat }}</td>
        </tr>
        <tr>
            <td>Pulang awal</td>
            <td>: {{ $abs->pulangawal }}</td>
        </tr>
        <tr>
            <td>Pulang ontime</td>
            <td>: {{ $abs->ontimepulang }}</td>
        </tr>
        <tr>
            <td>Pulang telat</td>
            <td>: {{ $abs->pulangtelat }}</td>
        </tr>
        <tr>
            <td>Sakit</td>
            <td>: {{ $abs->sakit }}</td>
        </tr>
        @endforeach
    </table>
    <hr>
    <div class="text">
        II. Penilaian hasil kerja
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th >No</th>
                <th>Aspek</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $nl)
            <tr>
                <td class="text-center">1</td>
                <td class="ms-2">Kualitas kerja</td>
                <td class="text-center">{{ $nl->s1 }}</td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="ms-2">Kuantitas kerja</td>
                <td class="text-center">{{ $nl->s2 }}</td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td class="ms-2">Inisiatif</td>
                <td class="text-center">{{ $nl->s3 }}</td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td class="ms-2">Disiplin</td>
                <td class="text-center">{{ $nl->s4 }}</td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td class="ms-2">Tanggung jawab</td>
                <td class="text-center">{{ $nl->s5 }}</td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td class="ms-2">Motivasi</td>
                <td class="text-center">{{ $nl->s6 }}</td>
            </tr>
            <tr>
                <td class="text-center">7</td>
                <td class="ms-2">Kerjasama</td>
                <td class="text-center">{{ $nl->s7 }}</td>
            </tr>
            <tr>
                <td class="text-center">8</td>
                <td class="ms-2">Pemahaman terhadap tugas</td>
                <td class="text-center">{{ $nl->s8 }}</td>
            </tr>
            <tr>
                <td class="text-center">9</td>
                <td class="ms-2">Penyesuaian diri</td>
                <td class="text-center">{{ $nl->s9 }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div class="text">
        III. Rekomendasi
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Peringkat</th>
                <th>Dari</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($peringkat as $pr)                    
                <td class="text-center">{{ $pr['peringkat'] }}</td>
                <td class="text-center">219</td>
                @endforeach
            </tr>
        </tbody>
    </table>
    <p>Dengan hasil nilai kinerja yang di dapat maka dapat di perpanjang kontrak kerja</p>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>