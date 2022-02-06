<style>
    .p_date{
        text-align: right;
    }
    .text{
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p class="p_date">{{ date('Y-m-d H:i:s') }}</p>
    <img src="../public/img/logo/logo.png" width="280px" type="image" alt="">
    <hr>
    <table>
        <tr>
            <td class="text">Nama</td>
            <td class="text">: {{ $upots->nama_ktp }}</td>
        </tr>
        <tr>
            <td class="text">Periode</td>
            <td class="text">: {{ $upots->periode_dr }} sd. {{ $upots->periode_sampai }}</td>
        </tr>
        <tr>
            <td class="text">Status</td>
            <td class="text">: {{ $upots->status }}</td>
        </tr>
        <tr>
            <td class="text">Saldo tabungan</td>
            <td class="text">: {{ $upots->saldo_tab }}</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td class="text">Jumlah hadir</td>
            <td class="text">: {{ $upots->jml_hadir }}</td>
        </tr>
        <tr>
            <td class="text">Upah</td>
            <td class="text">: {{ $upots->pot_jam }}</td>
        </tr>
        <tr>
            <td class="text">Potongan jam</td>
            <td class="text">: {{ $upots->lembur }}</td>
        </tr>
        <tr>
            <td class="text">Tabungan</td>
            <td class="text">: {{ $upots->asuransi }}</td>
        </tr>
        <tr>
            <td class="text">Asuransi</td>
            <td class="text">: {{ $upots->antigen }}</td>
        </tr>
        <tr>
            <td class="text">Gembok</td>
            <td class="text">: {{ $upots->gembok }}</td>
        </tr>
        <tr>
            <td class="text">Kaos</td>
            <td class="text">: {{ $upots->kaos }}</td>
        </tr>
        <tr>
            <td class="text">Kasbon</td>
            <td class="text">: {{ $upots->kasbon }}</td>
        </tr>
        <tr>
            <td class="text">BPJS kesehatan</td>
            <td class="text">: {{ $upots->bpjskes }}</td>
        </tr>
        <tr>
            <td class="text">Pulsa/Token</td>
            <td class="text">: {{ $upots->pultok }}</td>
        </tr>
        <tr>
            <td class="text">Ambil tabungan</td>
            <td class="text">: {{ $upots->abl_tabungan }}</td>
        </tr>
        <tr>
            <td class="text">Total upah</td>
            <td class="text">: {{ $upots->total_upah }}</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td class="text">Sakit</td>
            <td class="text">: 1</td>
        </tr>
        <tr>
            <td class="text">Ijin</td>
            <td class="text">: 2</td>
        </tr>
    </table>
</body>
</html>