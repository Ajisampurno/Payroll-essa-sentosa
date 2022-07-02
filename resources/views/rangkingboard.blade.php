@extends('layouts.main')
@section('container')

    <div class="row justify-content-center">
        <div class="col-md-9">
            
           
    <div class="card m-5">
        <div class="card-header">
            <h1 class="text-center">Rangking board</h1>
        </div>
        <!-- BADAN TABLE -->
        <div class="card-body"> 
            <table class="table table-light table-hover">
                <thead class="text-center">
                    <tr class="users-table-info">
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
    

@endsection