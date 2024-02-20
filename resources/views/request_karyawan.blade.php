@extends('layouts.main')
@section('container')
    <div class="container pt-5">
        <div class="row">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Add Request 
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">NIP</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Periode</th>
                                    <th class="text-center">Alasan</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengajuan as $item)
                                <tr>
                                    <td class="text-center">{{ $item->nip }}</td>
                                    <td>{{ $item->nama_ktp }}</td>
                                    <td class="text-center">{{ $item->tgl_mulai }} sd {{ $item->tgl_sampai }}</td>
                                    <td class="text-center">{{ $item->alasan }}</td>
                                    <td class="text-center"><mark>{{ $item->aproval }}</mark></td>
                                    <td class="text-center">
                                        <a href="/show_pengajuan/{{ $item->id }}" type="button" class="btn btn-info">Show</a>
                                    </td>
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
