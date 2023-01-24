@extends('layouts.main')
@section('container')

    <div class="row justify-content-center">
        <div class="col-md-10">
            
           
    <div class="card mt-3">
        <div class="card-header">
            <h1 class="text-center">Rangking board</h1>
        </div>
        <!-- BADAN TABLE -->
        <div class="card-body"> 
            <div class="table-rangking">
                <table class="table table-light table-hover">
                    <thead class="text-center">
                        <tr class="users-table-info">
                            <th>Rank</th>
                            <th>NIP</th>
                            <th>NAMA</th>
                            <th>Skor</th>
                            @if (auth()->user()->ceklevel=="manager")
                            <th>Aksi</th>
                            @endif
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
                                @if (auth()->user()->ceklevel=="manager")
                                <td class="text-center">
                                    <a href="/rangkingboard/hapus/{{ $i['id'] }}" class="aksi">
                                        <span data-feather="trash-2" class="icon" style="color: red" aria-hidden="true"></span>
                                    </a>
                                    <a href="" class="aksi">
                                        <span data-feather="edit" class="icon" style="color: blue" aria-hidden="true"></span>
                                    </a>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

@endsection