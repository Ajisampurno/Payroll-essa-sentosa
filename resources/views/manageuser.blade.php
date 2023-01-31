@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center">

        @if (session()->has('success'))
          <div class="alert alert-success mt-3" role="alert">
            {{ session('success') }}
          </div>
        @endif

            <div class="col-md-11 col-sm-11 mt-3">
                <h3>Manage User</h3>
                <div class="d-flex justify-content-end">
                    <a href="/registrasi">
                        <button type="button" class="btn btn-success"><span class="icon" data-feather="plus"></span> Tambah User</button>
                    </a>
                </div>
                <table class="table table-bordered bg-light shadow mt-3">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">NIP</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Level</th>
                            <th scope="col" class="text-center">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)    
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td class="text-center">{{ $user->nip }}</td>
                            <td>{{ $user->name }}</td>
                            <td class="text-center">{{ $user->ceklevel }}</td>
                            <td class="text-center">
                                <span class="p-relative">
                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                    </button>
                                    <ul class="users-item-dropdown dropdown">
                                        <li>
                                            <a href="/user/hapus/{{ $user->id }}" class="aksi" onclick="return confirm('Yakin ingin menghapus data?')">
                                                <span data-feather="trash-2" class="icon" style="color: red" aria-hidden="true"></span>
                                                Hapus
                                            </a>    
                                        </li>
                                        <li>
                                            <a href="/edituser/{{ $user->id }}" class="aksi">
                                                <span data-feather="edit" class="icon" style="color: blue" aria-hidden="true"></span>
                                                Edit
                                            </a>
                                        </li>
                                    </ul>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>            
            </div>
        </div>
    </div>
@endsection
