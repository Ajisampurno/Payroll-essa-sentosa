@extends('layouts.main')
@section('container')

    <div class="container pt-5">
        <div class="row justify-content-center pb-5">
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/storage/{{ auth()->user()->foto }}" class="img-fluid rounded-start m-2" alt="...">
                            <button type="button" class="btn btn-warning ms-4">
                                <a href="/cetak_slip_gaji/{{ $profiles->id }}">Cetak slip gaji</a>
                            </button>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Nama KTP : {{ $profiles->nama_ktp}}</li>
                                    <li class="list-group-item">Nama absen : {{ $profiles->nama_absen }}</li>
                                    <li class="list-group-item">NIP : {{ $profiles->id }}</li>
                                    <li class="list-group-item">NO KTP : {{ $profiles->no_ktp }}</li>
                                    <li class="list-group-item">TTL : {{ $profiles->alamat_ktp }},{{ $profiles->tgl_lahir }}</li>
                                    <li class="list-group-item">Agama : {{ $profiles->agama }}</li>
                                    <li class="list-group-item">Alamat : {{ $profiles->alamat }}</li>
                                    <li class="list-group-item">Aktif mulai : {{ $profiles->aktif_mulai }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
