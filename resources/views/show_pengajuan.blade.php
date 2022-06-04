@extends('layouts.main')
@section('container')

    <div class="container pt-5">
        <div class="row justify-content-center pb-5">
            <div class="col-md-3">
                <img class="img-thumbnail" src="/storage/{{ $pengajuan->foto }} " alt="{{ $pengajuan->foto }}">
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama KTP : {{ $pengajuan->nama_ktp}}</li>
                    <li class="list-group-item">Dari Tgl : {{ $pengajuan->tgl_mulai }}</li>
                    <li class="list-group-item">Sampai Tgl : {{ $pengajuan->tgl_sampai }}</li>
                    <li class="list-group-item">Alasan : {{ $pengajuan->alasan}}</li>
                    <li class="list-group-item">
                        <button type="button" class="btn btn-warning">
                            <a href="/cetak_slip_gaji/{{ $pengajuan->id }}">Cetak</a>
                        </button>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
