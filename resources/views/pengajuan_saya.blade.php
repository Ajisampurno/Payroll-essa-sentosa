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

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card-body">
                <h3 class="text-center mb-4">FORMULIR PENGAJUAN ABSEN KARYAWAN</h3>
                <form action="pengajuan/store" method="post" enctype="multipart/form-data">
                    
                    @csrf

                    <label for="nip"><small class="text-muted m-4">NIP</small> </label>
                    <div class=" m-2">
                        <input class="form-control shadow-sm rounded @error('nip') is-invalid  @enderror" value=" {{ auth()->user()->nip }}" type="text" name="nip" id="nip">
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                        @enderror
                    </div>
                    <label for="nama"><small class="text-muted m-4">Nama:</small> </label>
                    <div class=" m-2">
                        <input class="form-control shadow-sm rounded @error('nama_ktp') is-invalid  @enderror" value="{{ auth()->user()->name }}" type="text" name="nama_ktp">
                        @error('nama_ktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                        @enderror
                    </div>
                    <label for="tgl_mulai"><small class="text-muted m-4">Tgl mulai cuti:</small> </label>
                    <div class=" m-2">
                        <input class="form-control shadow-sm bg-body rounded @error('tgl_mulai') is-invalid  @enderror" value="{{ old('tgl_mulai') }}" type="date" id="tgl_mulai" name="tgl_mulai">
                        @error('tgl_mulai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                        @enderror
                    </div>
                    <label for="tgl_sampai"><small class="text-muted m-4">Tgl sampai cuti:</small> </label>
                    <div class=" m-2">
                        <input class="form-control shadow-sm bg-body rounded @error('tgl_sampai') is-invalid  @enderror" value="{{ old('tgl_sampai') }}" type="date" id="tgl_sampai" name="tgl_sampai">
                        @error('tgl_sampai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                        @enderror
                    </div>
                    <label for="alasan"><small class="text-muted m-4">Alasan cuti:</small> </label>
                    <div class="m-2 shadow-sm">
                        <select class="form-select" value="{{ old('alasan') }}" name="alasan" id="alasan">
                            <option selected>Pilih Alasan</option>
                            <option value="cuti">Cuti</option>
                            <option value="sakit">Sakit</option>
                        </select>
                        @error('alasan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                        @enderror
                    </div>
                    <p class="fst-italic text-muted m-4">Lampirkan foto</p>
                    <div class="border shadow-sm m-2">
                        <input class="form-control @error('foto') is-invalid  @enderror" value="{{ old('foto') }}" type="file" name="foto" id="foto">
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>   
                        @enderror
                    </div>
                    <div class=" m-2">
                        <button class="btn btn-success " type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
        </div>
        </div>
    </div>
    </div>
@endsection
