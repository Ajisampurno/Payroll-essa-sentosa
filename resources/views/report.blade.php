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
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">DA</th>
                                    <th class="text-center">DO</th>
                                    <th class="text-center">DT</th>
                                    <th class="text-center">PA</th>
                                    <th class="text-center">PO</th>
                                    <th class="text-center">PT</th>
                                    <th class="text-center">Sakit</th>
                                    <th class="text-center">Cuti</th>
                                    @if (Saw::max('nilai1') != 0)
                                       <th class="text-center">A1</th>
                                    @endif
                                    @if (Saw::max('nilai2') != 0)
                                        <th class="text-center">A2</th>
                                    @endif
                                    @if (Saw::max('nilai3') != 0)
                                       <th class="text-center">A3</th>
                                    @endif
                                    @if (Saw::max('nilai4') != 0)
                                       <th class="text-center">A4</th>
                                    @endif
                                    @if (Saw::max('nilai5') != 0)
                                       <th class="text-center">A5</th>
                                    @endif
                                    @if (Saw::max('nilai6') != 0)
                                       <th class="text-center">A6</th>
                                    @endif
                                    @if (Saw::max('nilai7') != 0)
                                       <th class="text-center">A7</th>
                                    @endif
                                    @if (Saw::max('nilai8') != 0)
                                       <th class="text-center">A8</th>
                                    @endif
                                    @if (Saw::max('nilai9') != 0)
                                       <th class="text-center">A9</th>
                                    @endif
                                    @if (Saw::max('nilai10') != 0)
                                       <th class="text-center">A10</th>
                                    @endif
                                    @if (Saw::max('nilai11') != 0)
                                       <th class="text-center">A11</th>
                                    @endif
                                    @if (Saw::max('nilai12') != 0)
                                       <th class="text-center">A13</th>
                                    @endif
                                    @if (Saw::max('nilai13') != 0)
                                       <th class="text-center">A13</th>
                                    @endif
                                    @if (Saw::max('nilai14') != 0)
                                       <th class="text-center">A14</th>
                                    @endif
                                    @if (Saw::max('nilai15') != 0)
                                       <th class="text-center">A15</th>
                                    @endif
                                    @if (Saw::max('nilai16') != 0)
                                       <th class="text-center">A16</th>
                                    @endif
                                    @if (Saw::max('nilai17') != 0)
                                       <th class="text-center">A17</th>
                                    @endif
                                    @if (Saw::max('nilai18') != 0)
                                       <th class="text-center">A18</th>
                                    @endif
                                    @if (Saw::max('nilai19') != 0)
                                       <th class="text-center">A19</th>
                                    @endif
                                    @if (Saw::max('nilai20') != 0)
                                       <th class="text-center">A20</th>
                                    @endif
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
                                    <td class="text-center">{{ $s->nip}}</td>
                                    <td style="white-space: nowrap">{{ $s->nama_ktp}}</td>
                                    <td class="text-center">{{ $s->datangawal}}</td>
                                    <td class="text-center">{{ $s->ontimemasuk}}</td>
                                    <td class="text-center">{{ $s->datangtelat}}</td>
                                    <td class="text-center">{{ $s->pulangawal}}</td>
                                    <td class="text-center">{{ $s->ontimepulang}}</td>
                                    <td class="text-center">{{ $s->pulangtelat}}</td>
                                    <td class="text-center">{{ $s->sakit }}</td>
                                    <td class="text-center">{{ $s->cuti}}</td>
                                    @if (Saw::max('nilai1') != 0)
                                        <td class="text-center">{{ $s->nilai1}}</td>
                                    @endif
                                    @if (Saw::max('nilai2') != 0)
                                        <td class="text-center">{{ $s->nilai2}}</td>
                                    @endif
                                    @if (Saw::max('nilai3') != 0)
                                        <td class="text-center">{{ $s->nilai3}}</td>
                                    @endif
                                    @if (Saw::max('nilai4') != 0)
                                        <td class="text-center">{{ $s->nilai4}}</td>
                                    @endif
                                    @if (Saw::max('nilai5') != 0)
                                        <td class="text-center">{{ $s->nilai5}}</td>
                                    @endif
                                    @if (Saw::max('nilai6') != 0)
                                        <td class="text-center">{{ $s->nilai6}}</td>
                                    @endif
                                    @if (Saw::max('nilai7') != 0)
                                        <td class="text-center">{{ $s->nilai7}}</td>
                                    @endif
                                    @if (Saw::max('nilai8') != 0)
                                        <td class="text-center">{{ $s->nilai8}}</td>
                                    @endif
                                    @if (Saw::max('nilai9') != 0)
                                        <td class="text-center">{{ $s->nilai9}}</td>
                                    @endif
                                    @if (Saw::max('nilai10') != 0)
                                        <td class="text-center">{{ $s->nilai10}}</td>
                                    @endif
                                    @if (Saw::max('nilai11') != 0)
                                        <td class="text-center">{{ $s->nilai11}}</td>
                                    @endif
                                    @if (Saw::max('nilai12') != 0)
                                        <td class="text-center">{{ $s->nilai12}}</td>
                                    @endif
                                    @if (Saw::max('nilai13') != 0)
                                        <td class="text-center">{{ $s->nilai13}}</td>
                                    @endif
                                    @if (Saw::max('nilai14') != 0)
                                        <td class="text-center">{{ $s->nilai14}}</td>
                                    @endif
                                    @if (Saw::max('nilai15') != 0)
                                        <td class="text-center">{{ $s->nilai15}}</td>
                                    @endif
                                    @if (Saw::max('nilai16') != 0)
                                        <td class="text-center">{{ $s->nilai16}}</td>
                                    @endif
                                    @if (Saw::max('nilai17') != 0)
                                        <td class="text-center">{{ $s->nilai17}}</td>
                                    @endif
                                    @if (Saw::max('nilai18') != 0)
                                        <td class="text-center">{{ $s->nilai18}}</td>
                                    @endif
                                    @if (Saw::max('nilai19') != 0)
                                        <td class="text-center">{{ $s->nilai19}}</td>
                                    @endif
                                    @if (Saw::max('nilai20') != 0)
                                        <td class="text-center">{{ $s->nilai20}}</td>
                                    @endif
                                    <td class="text-center">{{ $s->skor }}</td>                                    
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
