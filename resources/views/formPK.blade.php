@extends('layouts.main')
@section('container')
    
    <div class="row m-2 p-2">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Data Karyawan
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
            
                        <tr>
                            <td>NIK</td>
                            <td>{{ $profiles->id }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $profiles->nama_ktp }}</td>
                        </tr>
                        <tr>
                            <td>Bagian</td>
                            <td>{{ $profiles->bagian }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @php
            $input_nip = $profiles->id;
            $input_nama = $profiles->nama_ktp;
        @endphp
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center ">Form penilaian pegawai</h1>
                </div>
                <div class="card-body">
                    <form action="/input_nilai/store" method="POST">
                        @csrf

                        <input type="hidden" id="nip" name="nip" value="{{ $input_nip }}">
                        <input type="hidden" id="nama_ktp" name="nama_ktp" value="{{ $input_nama }}">
                        <table class="table table-bordered m-1">
                            <tr class=" text-center m-1">
                                <th>
                                    NO
                                </th>
                                <th>
                                    Penilaian Tentang
                                </th>
                                <th>
                                    
                                </th>
                                <th>
                                    2
                                </th>
                                <th>
                                    3
                                </th>
                                <th>
                                    4
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">1</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Presensi</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s1" id="s1p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s1" id="s1p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s1" id="s1p3" value="3">                                
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s1" id="s1p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">2</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Kualitas Pekerjaan</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s2" id="s2p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s2" id="s2p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s2" id="s2p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s2" id="s2p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">3</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Kuantitas Hasil</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s3" id="s3p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s3" id="s3p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s3" id="s3p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s3" id="s3p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">4</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Ketepatan Waktu Dan Kecepatan</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s4" id="s4p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s4" id="s4p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s4" id="s4p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s4" id="s4p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">5</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Kerja Sama Tim</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s5" id="s5p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s5" id="s5p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s5" id="s5p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s5" id="s5p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">6</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Kemampuan Adaptasi</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s6" id="s6p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s6" id="s6p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s6" id="s6p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s6" id="s6p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">7</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Kepemimpinan</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s7" id="s7p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s7" id="s7p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s7" id="s7p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s7" id="s7p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">8</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Tanggung jawab</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s8" id="s8p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s8" id="s8p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s8" id="s8p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s8" id="s8p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">9</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Sikap</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s9" id="s9p1" value="1"
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s9" id="s9p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s9" id="s9p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s9" id="s9p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">10</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Komunikasi</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s10" id="s10p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s10" id="s10p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s10" id="s10p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s10" id="s10p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">11</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Loyalitas</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s11" id="s11p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s11" id="s11p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s11" id="s11p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s11" id="s11p4" value="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="card-text p-2 text-center">12</p>
                                </td>
                                <td>
                                    <p class="card-text p-2">Pengalaman</p>
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s12" id="s12p1" value="1">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s12" id="s12p2" value="2">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s12" id="s12p3" value="3">
                                </td>
                                <td class="text-center">
                                    <input class="m-2" type="radio" name="s12" id="s12p4" value="4">
                                </td>
                            </tr>
                        </table>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

@endsection