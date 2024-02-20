@extends('layouts.main')
@section('container')
    <div class="container pt-5">
        <div class="row justify-content-center pb-5">
                <div class="col-md-8">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @php 
                        if (date('Y-m-d') > $show_pengajuan->tgl_mulai){
                            $req = 'Tanggal waktu permintaan sudah terlewat';  
                        }else{
                            $req = 'Menunggu disetujui';
                        }
                    @endphp
                    <div class="card mb-3 p-3" style="max-width: 700px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/'.$show_pengajuan->foto) }}" class="img-fluid rounded-start m-2" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title @if($req == 'Request expired' ) text-danger @endif text-decoration-underline">{{ $req }}</h5>
                                    <p class="card-text position-absolute top-0 end-0">
                                        <small class="text-muted m-4">{{ $show_pengajuan->created_at }}</small>
                                    </p>
                                    <table class="table">
                                        <tr>
                                            <td>Nama</td>
                                            <td>:{{ $show_pengajuan->nama_ktp }}</td>
                                        </tr>
                                        <tr>
                                            <td>NIP</td>
                                            <td>:{{ $show_pengajuan->nip }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Mulai Cuti </td>
                                            <td>:{{ $show_pengajuan->tgl_mulai }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Sampai Cuti </td>
                                            <td>:{{ $show_pengajuan->tgl_sampai }}</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan:</td>
                                            <td>:{{ $show_pengajuan->alasan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                :<mark>{{ $show_pengajuan->aproval }}</mark>
                                            </td>
                                        </tr>
                                        @if(auth()->user()->ceklevel=="admin")
                                        <tr>
                                            @if ($show_pengajuan->aproval == 'Menunggu')
                                            <form action="/approve/update/{{ $show_pengajuan->id }}" method="post">
                                                @csrf
                                                    <td>
                                                        <button class="btn btn-success ms-5" type="submit">Setuju</button>
                                                    </td>
                                            </form>    
                                            
                                            <form action="/cancel/update/{{ $show_pengajuan->id }}" method="post">
                                                @csrf
                                                    <td>
                                                        <button class="btn btn-warning" type="submit">Cancel</button>
                                                    </td>
                                            </form>    
                                            @endif
                                        </tr>                                        
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
@endsection
