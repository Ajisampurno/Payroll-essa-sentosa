@extends('layouts.main')
@section('container')

    <main class="main users chart-page" id="skip-target">
        <div class="container">
        <h2 class="main-title text-center">Data karyawan</h2>
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    <div class="card">
                        <div class="card-header d-inline-block">
                            <!-- INPUT SEARCH -->
                            <div class="search-wrapper">
                                <i data-feather="search" aria-hidden="true"></i>
                                <input type="text" placeholder="Enter keywords ..." required>
                            </div>
                            <!-- BADAN TABLE -->
                            <div class="card-body">
                                <table class="table table-light table-hover"">
                                    <thead>
                                        <tr class="users-table-info text-center">
                                            <th>NIP</th>
                                            <th>NAMA ABSEN</th>
                                            <th>IN</th>
                                            <th>OUT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attendances as $attendance)
                                        <tr>
                                            <td class="text-center">{{ $attendance->nip }}</td>
                                            <td>{{ $attendance->nama_absen }}</td>
                                            <td class="text-center">{{ $attendance->in }}</td>
                                            <td class="text-center">{{ $attendance->out }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection