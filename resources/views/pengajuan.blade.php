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

                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('nip') is-invalid  @enderror" value="{{ old('nip') }}" type="text" name="nip" id="nip" placeholder="NIP">
                            <label for="nip">NIP</label>
                            @error('nip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('nama_ktp') is-invalid  @enderror" value="{{ old('nama_ktp') }}" type="text" name="nama_ktp" placeholder="Nama KTP">
                            <label for="nama_ktp">Nama</label>
                            @error('nama_ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('tgl_mulai') is-invalid  @enderror" value="{{ old('tgl_mulai') }}" type="date" id="tgl_mulai" placeholder="Tgl Mulai Cuti" name="tgl_mulai">
                            <label >Tgl Mulai Cuti</label>
                            @error('tgl_mulai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <input class="form-control shadow-sm bg-body rounded @error('tgl_sampai') is-invalid  @enderror" value="{{ old('tgl_sampai') }}" type="date" id="tgl_sampai" placeholder="Tgl Sampai Cuti" name="tgl_sampai">
                            <label >Tgl Sampai Cuti</label>
                            @error('tgl_sampai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="input-group mt-2 shadow-sm">
                            <label class="input-group-text" for="alasan">Alasan Cuti</label>
                            <select class="form-select" value="{{ old('alasan') }}" name="alasan" id="alasan">
                              <option selected>Pilih Alasan</option>
                              <option value="Cuti Menikah">Cuti Menikah</option>
                              <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                              <option value="Cuti Tahunan">Cuti Tahunan</option>
                              <option value="Sakit">Sakit</option>
                            </select>
                            @error('alasan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <p class="fst-italic mt-5">Lampirkan foto surat dokter apabila beralasan sakit</p>
                        <div class="border shadow-sm mt-2">
                            <input class="form-control @error('foto') is-invalid  @enderror" value="{{ old('foto') }}" type="file" name="foto" id="foto">
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>   
                            @enderror
                        </div>
                        <div class="form-floating mt-2">
                            <button class="btn btn-success " type="submit">Simpan</button>
                        </div>
                    </form>
                </div>    
            </div>           
        </div>
    </div>
        
@endsection