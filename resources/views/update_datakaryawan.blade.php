@extends('layouts.main')
@section('container')
    <div class="container">  
        <div class="row mt-3 justify-content-center"> 
            <div class="col-md-5">
                <div class="card-body">
                    <h3 class="text-center mb-4">UBAH DATA KARYAWAN</h3>
                    <form action="/update_datakaryawan/update/{{ $profile->id }}" method="post">
                        
                        @csrf

                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('id') is-invalid  @enderror" value="{{ old('id',$profile->id) }}" type="text" name="id" id="id" placeholder="NIP">
                            <label for="id">NIP</label>
                            @error('id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('nama_ktp') is-invalid  @enderror" value="{{ old('nama_ktp',$profile->nama_ktp) }}" type="text" name="nama_ktp" placeholder="Nama KTP">
                            <label for="nama_ktp">Nama KTP</label>
                            @error('nama_ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('nama_absen') is-invalid  @enderror" value="{{ old('nama_Absen',$profile->nama_absen) }}" type="text" name="nama_absen" id="nama_absen" placeholder="Nama Absen">
                            <label for="nama_absen">Nama Absen</label>
                            @error('nama_absen')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('pin') is-invalid  @enderror" value="{{ old('pin',$profile->pin) }}" type="text" name="pin" id="pin" placeholder="pin">
                            <label for="pin">PIN</label>
                            @error('pin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('no_ktp') is-invalid  @enderror" value="{{ old('no_ktp',$profile->no_ktp) }}" type="text" id="no_ktp" placeholder="No KTP" name="no_ktp">
                            <label >No KTP</label>
                            @error('no_ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('alamat_ktp') is-invalid  @enderror" value="{{ old('alamat_ktp',$profile->alamat_ktp) }}" type="text" id="alamat_ktp" placeholder="Alamat KTP" name="alamat_ktp">
                            <label >Alamat KTP</label>
                            @error('alamat_ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('tgl_lahir') is-invalid  @enderror" value="{{ old('tgl_lahir',$profile->tgl_lahir) }}" type="date" id="tgl_lahir" placeholder="Tgl Lahir" name="tgl_lahir">
                            <label >Tgl lahir</label>
                            @error('tgl_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('agama') is-invalid  @enderror" value="{{ old('agama',$profile->agama) }}" type="text" id="agama" placeholder="Agama" name="agama">
                            <label >Agama</label>
                            @error('agama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('alamat') is-invalid  @enderror" value="{{ old('alamat',$profile->alamat) }}" type="text" id="alamat" placeholder="Alamat Sekarang" name="alamat">
                            <label >Alamat Sekarang</label>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('referensi') is-invalid  @enderror" value="{{ old('referensi',$profile->referensi) }}" type="text" id="referensi" placeholder="Referensi" name="referensi">
                            <label >Referensi</label>
                            @error('referensi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('aktiv_mulai') is-invalid  @enderror" value="{{ old('aktif_mulai',$profile->aktiv_mulai) }}" type="date" id="aktiv_mulai" placeholder="Aktiv Mulai" name="aktiv_mulai">
                            <label >Aktiv Mulai</label>
                            @error('aktiv_mulai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <button class="btn btn-success " type="submit">Ubah</button>
                        </div>
                    </form>
                </div>    
            </div>           
        </div>
    </div>
        
@endsection