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
                @foreach ($request_karyawan as $item)
                @php 
                    if (date('Y-m-d') > $item->tgl_mulai){
                        $req = 'Request expired';  
                    }else{
                        $req = 'Menunggu di approve';
                    }
                @endphp
                
                <div class="card mb-3 p-3" style="max-width: 700px;">
                    <div   div class="row g-0">
                            <div class="col-md-4">
                                <img src="/storage/{{ $item->foto }}" class="img-fluid rounded-start m-2" alt="...">
                            </div>
                            <div class="col-md-8">
                                <h5 class="ms-4 card-title @if($req == 'Request expired' ) text-danger @endif text-decoration-underline">{{ $req }}</h5>
                                <div class="card-body">
                                    <p class="card-text position-absolute top-0 end-0">
                                        <small class="text-muted m-4">{{ $item->created_at }}</small>
                                    </p>
                                    <table class="table">
                                        <tr>
                                            <td>Nama</td>
                                            <td>:{{ $item->nama_ktp }}</td>
                                        </tr>
                                        <tr>
                                            <td>NIP</td>
                                            <td>:{{ $item->nip }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Mulai Cuti </td>
                                            <td>:{{ $item->tgl_mulai }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Sampai Cuti </td>
                                            <td>:{{ $item->tgl_sampai }}</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan:</td>
                                            <td>:{{ $item->alasan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                :<mark>{{ $item->aproval }}</mark>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            @if ($item->aproval !== 'Di Approve' || $item->aproval !== 'Di cancel' )
                                            <form action="/approve/update/{{ $item->id }}" method="post">
                                                @csrf
                                                    <td>
                                                        <button class="btn btn-success ms-5" type="submit">Approve</button>
                                                    </td>
                                            </form>    
                                            @endif

                                            @if ($item->aproval == 'Menunggu')
                                            <form action="/cancel/update/{{ $item->id }}" method="post">
                                                @csrf
                                                    <td>
                                                        <button class="btn btn-warning" type="submit">Cancel</button>
                                                    </td>
                                            </form>    
                                            @endif
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection
