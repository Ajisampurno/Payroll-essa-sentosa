@extends('layouts.main')
@section('container')
    <div class="container">  
        <div class="row mt-3 justify-content-center"> 
            <div class="col-md-5">

                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>
                @endif
      

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
        </div>
    </div>
        
@endsection