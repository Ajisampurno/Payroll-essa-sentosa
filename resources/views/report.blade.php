@extends('layouts.main')
@section('container')
    <div class="card-body"> 
        <div>
            <h3>INPUT NILAI</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-light table-hover">
                <thead class="text-center">
                    <tr class="users-table-info">
                        <th>#</th>
                        <th>NIP</th>
                        <th>NAMA</th>
                        @foreach($penilaian as $nilai)
                        @endforeach
                            @if ($nilai->s1 != null)
                            <th>A1</th>
                            @endif
                            @if ($nilai->s2 != null)
                                <th>A2</th>
                            @endif
                            @if ($nilai->s3 != null)
                                <th>A3</th>
                            @endif
                            @if ($nilai->s4 != null)
                                <th>A4</th>
                            @endif
                            @if ($nilai->s5 != null)
                                <th>A5</th>
                            @endif
                            @if ($nilai->s6 != null)
                                <th>A6</th>
                            @endif
                            @if ($nilai->s7 != null)
                                <th>A7</th>
                            @endif
                            @if ($nilai->s8 != null)
                                <th>A8</th>
                            @endif
                            @if ($nilai->s9 != null)
                                <th>A9</th>
                            @endif
                            @if ($nilai->s10 != null)
                                <th>A10</th>
                            @endif
                            @if ($nilai->s11 != null)
                                <th>A11</th>
                            @endif
                            @if ($nilai->s12 != null)
                                <th>A12</th>
                            @endif
                            @if ($nilai->s13 != null)
                                <th>A13</th>
                            @endif
                            @if ($nilai->s14 != null)
                                <th>A14</th>
                            @endif
                            @if ($nilai->s15 != null)
                                <th>A15</th>
                            @endif
                            @if ($nilai->s16 != null)
                                <th>A16</th>
                            @endif
                            @if ($nilai->s17 != null)
                                <th>A17</th>
                            @endif
                            @if ($nilai->s18 != null)
                                <th>A18</th>
                            @endif
                            @if ($nilai->s19 != null)
                                <th>A19</th>
                            @endif
                            @if ($nilai->s20 != null)
                                <th>A20</th>
                            @endif
                        </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($penilaian as $nilai)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $nilai->nip }}</td>
                        <td>{{ $nilai->nama_ktp }}</td>
                        @if ($nilai->s1 != null)
                            <td class="text-center">{{ $nilai->s1 }}</td>
                        @endif
                        @if ($nilai->s2 != null)
                            <td class="text-center">{{ $nilai->s2 }}</td>
                        @endif
                        @if ($nilai->s3 != null)
                            <td class="text-center">{{ $nilai->s3 }}</td>
                        @endif
                        @if ($nilai->s4 != null)
                            <td class="text-center">{{ $nilai->s4 }}</td>
                        @endif
                        @if ($nilai->s5 != null)
                            <td class="text-center">{{ $nilai->s5 }}</td>
                        @endif
                        @if ($nilai->s6 != null)
                            <td class="text-center">{{ $nilai->s6 }}</td>
                        @endif
                        @if ($nilai->s7 != null)
                            <td class="text-center">{{ $nilai->s7 }}</td>
                        @endif
                        @if ($nilai->s8 != null)
                            <td class="text-center">{{ $nilai->s8 }}</td>
                        @endif
                        @if ($nilai->s9 != null)
                            <td class="text-center">{{ $nilai->s9 }}</td>
                        @endif
                        @if ($nilai->s10 != null)
                            <td class="text-center">{{ $nilai->s10 }}</td>
                        @endif
                        @if ($nilai->s11 != null)
                            <td class="text-center">{{ $nilai->s11 }}</td>
                        @endif
                        @if ($nilai->s12 != null)
                            <td class="text-center">{{ $nilai->s12 }}</td>
                        @endif
                        @if ($nilai->s13 != null)
                            <td class="text-center">{{ $nilai->s13 }}</td>
                        @endif
                        @if ($nilai->s14 != null)
                            <td class="text-center">{{ $nilai->s14 }}</td>
                        @endif
                        @if ($nilai->s15 != null)
                            <td class="text-center">{{ $nilai->s15 }}</td>
                        @endif
                        @if ($nilai->s16 != null)
                            <td class="text-center">{{ $nilai->s16 }}</td>
                        @endif
                        @if ($nilai->s17 != null)
                            <td class="text-center">{{ $nilai->s17 }}</td>
                        @endif
                        @if ($nilai->s18 != null)
                            <td class="text-center">{{ $nilai->s18 }}</td>
                        @endif
                        @if ($nilai->s19 != null)
                            <td class="text-center">{{ $nilai->s19 }}</td>
                        @endif
                        @if ($nilai->s20 != null)
                            <td class="text-center">{{ $nilai->s20 }}</td>
                        @endif
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body"> 
        <div>
            <h3>MORMALISASI</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-light table-hover">
                <thead class="text-center">
                    <tr class="users-table-info">
                        <th>#</th>
                        <th>NIP</th>
                        <th>NAMA</th>
                        @foreach($penilaian as $nilai)
                        @endforeach
                            @if ($nilai->s1 != null)
                            <th>A1</th>
                            @endif
                            @if ($nilai->s2 != null)
                                <th>A2</th>
                            @endif
                            @if ($nilai->s3 != null)
                                <th>A3</th>
                            @endif
                            @if ($nilai->s4 != null)
                                <th>A4</th>
                            @endif
                            @if ($nilai->s5 != null)
                                <th>A5</th>
                            @endif
                            @if ($nilai->s6 != null)
                                <th>A6</th>
                            @endif
                            @if ($nilai->s7 != null)
                                <th>A7</th>
                            @endif
                            @if ($nilai->s8 != null)
                                <th>A8</th>
                            @endif
                            @if ($nilai->s9 != null)
                                <th>A9</th>
                            @endif
                            @if ($nilai->s10 != null)
                                <th>A10</th>
                            @endif
                            @if ($nilai->s11 != null)
                                <th>A11</th>
                            @endif
                            @if ($nilai->s12 != null)
                                <th>A12</th>
                            @endif
                            @if ($nilai->s13 != null)
                                <th>A13</th>
                            @endif
                            @if ($nilai->s14 != null)
                                <th>A14</th>
                            @endif
                            @if ($nilai->s15 != null)
                                <th>A15</th>
                            @endif
                            @if ($nilai->s16 != null)
                                <th>A16</th>
                            @endif
                            @if ($nilai->s17 != null)
                                <th>A17</th>
                            @endif
                            @if ($nilai->s18 != null)
                                <th>A18</th>
                            @endif
                            @if ($nilai->s19 != null)
                                <th>A19</th>
                            @endif
                            @if ($nilai->s20 != null)
                                <th>A20</th>
                            @endif
                        </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($normalisasi as $nilai)

                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $nilai['nip'] }}</td>
                        <td>{{ $nilai['nama_ktp'] }}</td>
                        @if ($nilai['nor1'] != null)
                            <td class="text-center">{{ $nilai['nor1'] }}</td>
                        @endif
                        @if ($nilai['nor2'] != null)
                            <td class="text-center">{{ $nilai['nor2'] }}</td>
                        @endif
                        @if ($nilai['nor3'] != null)
                            <td class="text-center">{{ $nilai['nor3'] }}</td>
                        @endif
                        @if ($nilai['nor4'] != null)
                            <td class="text-center">{{ $nilai['nor4'] }}</td>
                        @endif
                        @if ($nilai['nor5'] != null)
                            <td class="text-center">{{ $nilai['nor5'] }}</td>
                        @endif
                        @if ($nilai['nor6'] != null)
                            <td class="text-center">{{ $nilai['nor6'] }}</td>
                        @endif
                        @if ($nilai['nor7'] != null)
                            <td class="text-center">{{ $nilai['nor7'] }}</td>
                        @endif
                        @if ($nilai['nor8'] != null)
                            <td class="text-center">{{ $nilai['nor8'] }}</td>
                        @endif
                        @if ($nilai['nor9'] != null)
                            <td class="text-center">{{ $nilai['nor9'] }}</td>
                        @endif
                        @if ($nilai['nor10'] != null)
                            <td class="text-center">{{ $nilai['nor10'] }}</td>
                        @endif
                        @if ($nilai['nor11'] != null)
                            <td class="text-center">{{ $nilai['nor11'] }}</td>
                        @endif
                        @if ($nilai['nor12'] != null)
                            <td class="text-center">{{ $nilai['nor12'] }}</td>
                        @endif
                        @if ($nilai['nor13'] != null)
                            <td class="text-center">{{ $nilai['nor13'] }}</td>
                        @endif
                        @if ($nilai['nor14'] != null)
                            <td class="text-center">{{ $nilai['nor14'] }}</td>
                        @endif
                        @if ($nilai['nor15'] != null)
                            <td class="text-center">{{ $nilai['nor15'] }}</td>
                        @endif
                        @if ($nilai['nor16'] != null)
                            <td class="text-center">{{ $nilai['nor16'] }}</td>
                        @endif
                        @if ($nilai['nor17'] != null)
                            <td class="text-center">{{ $nilai['nor17'] }}</td>
                        @endif
                        @if ($nilai['nor18'] != null)
                            <td class="text-center">{{ $nilai['nor18'] }}</td>
                        @endif
                        @if ($nilai['nor19'] != null)
                            <td class="text-center">{{ $nilai['nor19'] }}</td>
                        @endif
                        @if ($nilai['nor20'] != null)
                            <td class="text-center">{{ $nilai['nor20'] }}</td>
                        @endif
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body"> 
        <div>
            <h3>PERANGKINGAN</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-light table-hover">
                <thead class="text-center">
                    <tr class="users-table-info">
                        <th>#</th>
                        <th>NIP</th>
                        <th>NAMA</th>
                        @foreach($penilaian as $nilai)
                        @endforeach
                            @if ($nilai->s1)
                            <th>A1</th>
                            @endif
                            @if ($nilai->s2)
                                <th>A2</th>
                            @endif
                            @if ($nilai->s3)
                                <th>A3</th>
                            @endif
                            @if ($nilai->s4)
                                <th>A4</th>
                            @endif
                            @if ($nilai->s5)
                                <th>A5</th>
                            @endif
                            @if ($nilai->s6)
                                <th>A6</th>
                            @endif
                            @if ($nilai->s7)
                                <th>A7</th>
                            @endif
                            @if ($nilai->s8)
                                <th>A8</th>
                            @endif
                            @if ($nilai->s9)
                                <th>A9</th>
                            @endif
                            @if ($nilai->s10)
                                <th>A10</th>
                            @endif
                            @if ($nilai->s11)
                                <th>A11</th>
                            @endif
                            @if ($nilai->s12)
                                <th>A12</th>
                            @endif
                            @if ($nilai->s13)
                                <th>A13</th>
                            @endif
                            @if ($nilai->s14)
                                <th>A14</th>
                            @endif
                            @if ($nilai->s15)
                                <th>A15</th>
                            @endif
                            @if ($nilai->s16)
                                <th>A16</th>
                            @endif
                            @if ($nilai->s17)
                                <th>A17</th>
                            @endif
                            @if ($nilai->s18)
                                <th>A18</th>
                            @endif
                            @if ($nilai->s19)
                                <th>A19</th>
                            @endif
                            @if ($nilai->s20)
                                <th>A20</th>
                            @endif
                            <th>SKOR</th>
                        </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($perangkingan as $nilai)

                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $nilai['nip'] }}</td>
                        <td>{{ $nilai['nama_ktp'] }}</td>
                        @if ($nilai['nor1'])
                            <td class="text-center">{{ $nilai['nor1'] }}</td>
                        @endif
                        @if ($nilai['nor2'])
                            <td class="text-center">{{ $nilai['nor2'] }}</td>
                        @endif
                        @if ($nilai['nor3'])
                            <td class="text-center">{{ $nilai['nor3'] }}</td>
                        @endif
                        @if ($nilai['nor4'])
                            <td class="text-center">{{ $nilai['nor4'] }}</td>
                        @endif
                        @if ($nilai['nor5'])
                            <td class="text-center">{{ $nilai['nor5'] }}</td>
                        @endif
                        @if ($nilai['nor6'])
                            <td class="text-center">{{ $nilai['nor6'] }}</td>
                        @endif
                        @if ($nilai['nor7'])
                            <td class="text-center">{{ $nilai['nor7'] }}</td>
                        @endif
                        @if ($nilai['nor8'])
                            <td class="text-center">{{ $nilai['nor8'] }}</td>
                        @endif
                        @if ($nilai['nor9'])
                            <td class="text-center">{{ $nilai['nor9'] }}</td>
                        @endif
                        @if ($nilai['nor10'])
                            <td class="text-center">{{ $nilai['nor10'] }}</td>
                        @endif
                        @if ($nilai['nor11'])
                            <td class="text-center">{{ $nilai['nor11'] }}</td>
                        @endif
                        @if ($nilai['nor12'])
                            <td class="text-center">{{ $nilai['nor12'] }}</td>
                        @endif
                        @if ($nilai['nor13'])
                            <td class="text-center">{{ $nilai['nor13'] }}</td>
                        @endif
                        @if ($nilai['nor14'])
                            <td class="text-center">{{ $nilai['nor14'] }}</td>
                        @endif
                        @if ($nilai['nor15'])
                            <td class="text-center">{{ $nilai['nor15'] }}</td>
                        @endif
                        @if ($nilai['nor16'])
                            <td class="text-center">{{ $nilai['nor16'] }}</td>
                        @endif
                        @if ($nilai['nor17'])
                            <td class="text-center">{{ $nilai['nor17'] }}</td>
                        @endif
                        @if ($nilai['nor18'])
                            <td class="text-center">{{ $nilai['nor18'] }}</td>
                        @endif
                        @if ($nilai['nor19'])
                            <td class="text-center">{{ $nilai['nor19'] }}</td>
                        @endif
                        @if ($nilai['nor20'])
                            <td class="text-center">{{ $nilai['nor20'] }}</td>
                        @endif
                        <td class="text-center">{{ $nilai['skor'] }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>    
@endsection
