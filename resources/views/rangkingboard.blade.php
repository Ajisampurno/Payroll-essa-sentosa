@extends('layouts.main')
@section('container')

    <div class="row justify-content-center">
        <div class="col-md-5 mt-3">
            
        @if (session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
          @endif

        </div>
    </div>
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
                                    <th>SKOR</th>
                                    @if (auth()->user()->ceklevel=="manager")
                                        <th>AKSI</th>
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
                                        <td class="text-center">{{ $i->nip }}</td>
                                        <td >{{ $i->nama_ktp }}</td>
                                        <td class="text-center">{{ $i['skor'] }}</td>
                                        @if (auth()->user()->ceklevel=="manager"||auth()->user()->ceklevel=="pic")
                                        <td class="text-center">
                                            <span class="p-relative">
                                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                <div class="sr-only">More info</div>
                                                <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                </button>
                                                <ul class="users-item-dropdown dropdown">
                                                    <li>
                                                        <a href="/rangkingboard/hapus/{{ $i['id'] }}" class="aksi" onclick="return confirm('Yakin ingin menghapus data?')">
                                                            <span data-feather="trash-2" class="icon" style="color: red" aria-hidden="true"></span>
                                                            Hapus
                                                        </a>    
                                                    </li>
                                                    <li>
                                                        <a href="/update_nilai/{{ $i['nip'] }}" class="aksi">
                                                            <span data-feather="edit" class="icon" style="color: blue" aria-hidden="true"></span>
                                                            Edit
                                                        </a>
                                                    </li>
                                                </ul>
                                            </span>
                                        </td>
                                        @endif
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