@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 col-sm-12">
            <br>
            <div id="judul-saw">
                <p>Metode SAW</p>
                <hr>
            </div>
            <div class="card shadow-sm m-3" style="border-radius:0px 50px">
                <button class="analisa tombol">ANALISA</button>
                <div id="table-analisa" class="card-body">
                    <div class="table-responsive">
                        <table class="analisa table table-bordered">
                            <tr>
                                <th class="text-center">NIP</th>
                                <th>NAMA</th>
                                <th class="text-center">P1</th>
                                <th class="text-center">P2</th>
                                <th class="text-center">P3</th>
                                <th class="text-center">P4</th>
                                <th class="text-center">P5</th>
                                <th class="text-center">P6</th>
                                <th class="text-center">P7</th>
                                <th class="text-center">P8</th>
                                <th class="text-center">P9</th>
                                <th class="text-center">P10</th>
                                <th class="text-center">P11</th>
                                <th class="text-center">P12</th>
                            </tr>
                            @foreach ($input as $item)
                            <tr>
                                    <td class="text-center">{{ $item->nip }}</td>
                                    <td>{{ $item->nama_ktp }}</td>
                                    <td class="text-center">{{ $item->s1 }}</td>
                                    <td class="text-center">{{ $item->s2 }}</td>
                                    <td class="text-center">{{ $item->s3 }}</td>
                                    <td class="text-center">{{ $item->s4 }}</td>
                                    <td class="text-center">{{ $item->s5 }}</td>
                                    <td class="text-center">{{ $item->s6 }}</td>
                                    <td class="text-center">{{ $item->s7 }}</td>
                                    <td class="text-center">{{ $item->s8 }}</td>
                                    <td class="text-center">{{ $item->s9 }}</td>
                                    <td class="text-center">{{ $item->s10 }}</td>
                                    <td class="text-center">{{ $item->s11 }}</td>
                                    <td class="text-center">{{ $item->s12 }}</td>
                                </tr>
                                @endforeach
                        </table>
                    </div>                    
                </div>
            </div>

            <div class="card shadow-sm m-3" style="border-radius:0px 50px">
                <button class="normalisasi tombol">NORMALISASI</button>
                <div id="table-normalisasi" class="card-body">
                    <div class="table-responsive">
                        <table class="normalisasi table table-bordered">
                            <tr>
                                <th>NIP</th>
                                <th>NAMA</th>
                                <th>P1</th>
                                <th>P2</th>
                                <th>P3</th>
                                <th>P4</th>
                                <th>P5</th>
                                <th>P6</th>
                                <th>P7</th>
                                <th>P8</th>
                                <th>P9</th>
                                <th>P10</th>
                                <th>P11</th>
                                <th>P12</th>
                            </tr>
                            @foreach ($normalisasi as $key=>$item)
                            <tr>
                                <td class="text-center">{{ $item['nip']}}</td>
                                <td>{{ $item['nama']}}</td>
                                <td class="text-center">{{ $item['nilai1']}}</td>
                                <td class="text-center">{{ $item['nilai2']}}</td>
                                <td class="text-center">{{ $item['nilai3']}}</td>
                                <td class="text-center">{{ $item['nilai4']}}</td>
                                <td class="text-center">{{ $item['nilai5']}}</td>
                                <td class="text-center">{{ $item['nilai6']}}</td>
                                <td class="text-center">{{ $item['nilai7']}}</td>
                                <td class="text-center">{{ $item['nilai8']}}</td>
                                <td class="text-center">{{ $item['nilai9']}}</td>
                                <td class="text-center">{{ $item['nilai10'] }}</td>
                                <td class="text-center">{{ $item['nilai11'] }}</td>
                                <td class="text-center">{{ $item['nilai12'] }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm m-3" style="border-radius:0px 50px">
                <button class="perangkingan tombol">PERANGKINGAN</button>
                <!-- BADAN TABLE -->
                <div id="table-perangkingan" class="card-body"> 
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>Rank</th>
                                    <th>NIP</th>
                                    <th>NAMA</th>
                                    <th>Skor</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @php
                                    $n=1;
                                @endphp
                                @foreach ($fixnilai as $i)
                                    <tr>
                                        <td class="text-center">{{ $n++ }}</td>
                                        <td class="text-center">{{ $i['nip'] }}</td>
                                        <td >{{ $i['nama_ktp'] }}</td>
                                        <td class="text-center">{{ $i['skor'] }}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
