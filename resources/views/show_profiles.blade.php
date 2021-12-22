@extends('layouts.main')
@section('container')

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img class="img-thumbnail" src="/img/gambar.png" alt="">
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Nama KTP : {{ $profiles->nama_ktp }}</li>
                  <li class="list-group-item">Nama absen : {{ $profiles->nama_absen }}</li>
                  <li class="list-group-item">NIP : {{ $profiles->nip }}</li>
                  <li class="list-group-item">PIN : {{ $profiles->pin }}</li>
                  <li class="list-group-item">NO KTP : {{ $profiles->no_ktp }}</li>
                  <li class="list-group-item">TTL : {{ $profiles->ttl }}</li>
                  <li class="list-group-item">Agama : {{ $profiles->agama }}</li>
                  <li class="list-group-item">Alamat : {{ $profiles->alamat }}</li>
                  <li class="list-group-item">Referensi : {{ $profiles->referensi }}</li>
                  <li class="list-group-item">Aktif mulai : {{ $profiles->aktif_mulai }}</li>
                  <li class="list-group-item">Email : -</li>
                  <li class="list-group-item">No telp -:</li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection