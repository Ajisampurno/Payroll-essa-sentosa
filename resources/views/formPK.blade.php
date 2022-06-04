@extends('layouts.main')
@section('container')
    
    <div class="row m-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari ID pegawai" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2">Searc</button>
                      </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>NIK</td>
                            <td>143218059</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>Aji sampurno</td>
                        </tr>
                        <tr>
                            <td>Present</td>
                            <td>180 hari</td>
                        </tr>
                        <tr>
                            <td>Izin</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Hasil jepret</td>
                            <td>18000</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center ">Form penilaian pegawai</h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class=" text-center">
                            <th>
                                NO
                            </th>
                            <th>
                                Jenis penilaian
                            </th>
                            <th>
                                Nilai
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <p class="card-text pt-2 text-center">3</p>
                            </td>
                            <td>
                                <p class="card-text pt-2">Ketelitian dalam menjalankan tugas</p>
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary" for="btnradio1">1</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio2">2</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio3">3</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio4">4</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="card-text pt-2 text-center">4</p>
                            </td>
                            <td>
                                <p class="card-text pt-2">Menjaga dan peduli terhadap produk dan asset perusahaan</p>
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary" for="btnradio1">1</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio2">2</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio3">3</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio4">4</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="card-text pt-2 text-center">5</p>
                            </td>
                            <td>
                                <p class="card-text pt-2">Bekerjasama dengan tim, demi tujuan bersama </p>
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary" for="btnradio1">1</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio2">2</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio3">3</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio4">4</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="card-text pt-2 text-center">8</p>
                            </td>
                            <td>
                                <p class="card-text pt-2">Menyampaikan informasi atau pendapat dengan jujur </p>
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary" for="btnradio1">1</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio2">2</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio3">3</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio4">4</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="card-text pt-2 text-center">10</p>
                            </td>
                            <td>
                                <p class="card-text pt-2">Menghargai kepada atasan dan sesama </p>
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary" for="btnradio1">1</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio2">2</label>
                                  
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio3">3</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnradio4">4</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="button">Simpan</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection