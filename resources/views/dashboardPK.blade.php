@extends('layouts.main')

@section('container')

    <div class="row p-3">
        <div class="col-md-7">
            <div class="card" ">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama</td>
                            <td>Aji sampurno</td>    
                        </tr>    
                        <tr>
                            <td>NIP</td>
                            <td>143218059</td>
                        </tr>
                        <tr>
                            <td>Penilaian 1</td>
                            <td>0.66</td>
                        </tr>
                        <tr>
                            <td>Penilaian 2</td>
                            <td>1.00</td>
                        </tr>
                        <tr>
                            <td>Penilaian 3</td>
                            <td>0.75</td>
                        </tr>
                        <tr>
                            <td>Penilaian 4</td>
                            <td>1.00</td>
                        </tr>
                        <tr>
                            <td>Penilaian 5</td>
                            <td>1.00</td>
                        </tr>
                        <tr>
                            <td>Penilaian 6</td>
                            <td>0.75</td>
                        </tr>
                        <tr>
                            <td>Penilaian 7</td>
                            <td>0.66</td>
                        </tr>
                        <tr>
                            <td>Penilaian 8</td>
                            <td>0.75</td>
                        </tr>
                        <tr>
                            <td>Total skor</td>
                            <td>6.58</td>
                        </tr>
                        <tr>
                            <td>Peringkat</td>
                            <td>45 dari 189 pegawai</td>
                        </tr>
                    </table>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    
    <script>
        const labels = [
        'Bulan 1',   
        'Bulan 2',
        'Bulan 3',
        'Bulan 4',
        'Bulan 5',
        'Bulan 6',
        ];
    
        const data = {
            labels: labels,
            datasets: [{
                label: 'Peningkatan kinerja',
                backgroundColor: [
                    'rgb(181, 48, 252)'
                    ],
                data: [3, 2, 2, 2, 4, 3, 4],
            }]
        };
    
        const config = {
            type: 'line',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

    
  
@endsection