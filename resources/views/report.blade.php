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
                                    <th class="text-center">DT</th>
                                    <th class="text-center">PA</th>
                                    <th class="text-center">Sakit</th>
                                    <th class="text-center">Cuti</th>
                                    <th class="text-center">C1</th>
                                    <th class="text-center">C2</th>
                                    <th class="text-center">C3</th>
                                    <th class="text-center">C4</th>
                                    <th class="text-center">C5</th>
                                    <th class="text-center">C6</th>
                                    <th class="text-center">C7</th>
                                    <th class="text-center">C8</th>
                                    <th class="text-center">C9</th>
                                    <th class="text-center">C10</th>
                                    <th class="text-center">C11</th>
                                    <th class="text-center">C13</th>
                                    <th class="text-center">C13</th>
                                    <th class="text-center">C14</th>
                                    <th class="text-center">C15</th>
                                    <th class="text-center">C16</th>
                                    <th class="text-center">C17</th>
                                    <th class="text-center">C18</th>
                                    <th class="text-center">C19</th>
                                    <th class="text-center">C20</th>
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
                                    <td class="text-center">{{ $s['datangtelat']}}</td>
                                    <td class="text-center">{{ $s['pulangawal']}}</td>
                                    <td class="text-center">{{ $s['sakit'] }}</td>
                                    <td class="text-center">{{ $s['cuti'] }}</td>
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
