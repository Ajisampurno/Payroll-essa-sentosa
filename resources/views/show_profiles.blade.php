@extends('layouts.main')
@section('container')

    <div class="container pt-5">
        <div class="row justify-content-center pb-5">
            <div class="col-md-6">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama KTP : {{ $profiles->nama_ktp}}</li>
                    <li class="list-group-item">Nama absen : {{ $profiles->nama_absen }}</li>
                    <li class="list-group-item">NIP : {{ $profiles->id }}</li>
                    <li class="list-group-item">NO KTP : {{ $profiles->no_ktp }}</li>
                    <li class="list-group-item">TTL : {{ $profiles->alamat_ktp }},{{ $profiles->tgl_lahir }}</li>
                    <li class="list-group-item">Agama : {{ $profiles->agama }}</li>
                    <li class="list-group-item">Alamat : {{ $profiles->alamat }}</li>
                    <li class="list-group-item">Referensi : {{ $profiles->referensi }}</li>
                    <li class="list-group-item">Aktif mulai : {{ $profiles->aktif_mulai }}</li>
                    <li class="list-group-item">
                        <button type="button" class="btn btn-warning">
                            <a href="/cetak_slip_gaji/{{ $profiles->id }}">Cetak slip gaji</a>
                        </button> 
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
