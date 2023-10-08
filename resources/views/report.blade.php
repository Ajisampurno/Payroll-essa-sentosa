@php
    
use App\Models\Saw;
@endphp
@extends('layouts.main')
@section('container')

    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Report Nilai</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Rank</th>
                                    <th class="text-center">NIP</th>
                                    <th class="text-center">DA</th>
                                    <th class="text-center">DO</th>
                                    <th class="text-center">DT</th>
                                    <th class="text-center">PA</th>
                                    <th class="text-center">PO</th>
                                    <th class="text-center">PT</th>
                                    <th class="text-center">Sakit</th>
                                    <th class="text-center">Cuti</th>
                                    <th class="text-center">A1</th>
                                    <th class="text-center">A2</th>
                                    <th class="text-center">A3</th>
                                    <th class="text-center">A4</th>
                                    <th class="text-center">A5</th>
                                    <th class="text-center">A6</th>
                                    <th class="text-center">A7</th>
                                    <th class="text-center">A8</th>
                                    <th class="text-center">A9</th>
                                    <th class="text-center">A10</th>
                                    <th class="text-center">A11</th>
                                    <th class="text-center">A13</th>
                                    <th class="text-center">A13</th>
                                    <th class="text-center">A14</th>
                                    <th class="text-center">A15</th>
                                    <th class="text-center">A16</th>
                                    <th class="text-center">A17</th>
                                    <th class="text-center">A18</th>
                                    <th class="text-center">A19</th>
                                    <th class="text-center">A20</th>
                                    <th class="text-center">Skor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $rank = 1;
                                @endphp
                                @foreach ($saw as $s)
                                    
                                <tr>
                                    <th class="text-center">{{ $rank++ }}</th>
                                    <td class="text-center">{{ $s['nip']}}</td>
                                    <td class="text-center">{{ $s['datangawal']}}</td>
                                    <td class="text-center">{{ $s['ontimemasuk']}}</td>
                                    <td class="text-center">{{ $s['datangtelat']}}</td>
                                    <td class="text-center">{{ $s['pulangawal']}}</td>
                                    <td class="text-center">{{ $s['ontimepulang']}}</td>
                                    <td class="text-center">{{ $s['pulangtelat']}}</td>
                                    <td class="text-center">{{ $s['sakit'] }}</td>
                                    <td class="text-center">{{ $s['nilai1']}}</td>
                                    <td class="text-center">{{ $s['nilai2']}}</td>
                                    <td class="text-center">{{ $s['nilai3']}}</td>
                                    <td class="text-center">{{ $s['nilai4']}}</td>
                                    <td class="text-center">{{ $s['nilai5']}}</td>
                                    <td class="text-center">{{ $s['nilai6']}}</td>
                                    <td class="text-center">{{ $s['nilai7']}}</td>
                                    <td class="text-center">{{ $s['nilai8']}}</td>
                                    <td class="text-center">{{ $s['nilai9']}}</td>
                                    <td class="text-center">{{ $s['nilai10']}}</td>
                                    <td class="text-center">{{ $s['nilai11']}}</td>
                                    <td class="text-center">{{ $s['nilai12']}}</td>
                                    <td class="text-center">{{ $s['nilai13']}}</td>
                                    <td class="text-center">{{ $s['nilai14']}}</td>
                                    <td class="text-center">{{ $s['nilai15']}}</td>
                                    <td class="text-center">{{ $s['nilai16']}}</td>
                                    <td class="text-center">{{ $s['nilai17']}}</td>
                                    <td class="text-center">{{ $s['nilai18']}}</td>
                                    <td class="text-center">{{ $s['nilai19']}}</td>
                                    <td class="text-center">{{ $s['nilai20']}}</td>
                                    <td class="text-center">{{ $s['skor'] }}</td>                                    
                                </tr>
                                @endforeach
                            </tbody>    
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
