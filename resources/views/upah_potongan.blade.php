@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <div class="card">
                <div class="card-header d-inline-block">
                    <!-- INPUT SEARC -->
                    <div class="search-wrapper">
                      <i data-feather="search" aria-hidden="true"></i>
                      <input type="text" placeholder="Enter keywords ..." required> 
                      <!-- BUTTON EXPORT IMPORT -->
                      <button class="btn btn-success" >
                        <a href="/export_upot">Export</a>
                      </button>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Import
                      </button>
                      <a href="/hapus_semua">
                          <button class="btn btn-danger" type="button">hapus</button>
                      </a>
                    </div>
                  </div>
                <div class="card mx-5 my-3">
                    <div class="card-body">
                        NOT AVAILABLE
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="/import_upot" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <input type="file" name="file" required="required">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">keluar</button>
                        <button type="submit" class="btn btn-primary">Selesai</button>
                        </div>
                    </form>
                    </div>
                    
                </div>
                </div>
            </div>        
        </div>
    </div>
</div>
    
@endsection