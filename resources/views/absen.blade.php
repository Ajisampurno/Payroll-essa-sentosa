@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="d-flex justify-content-center align-items-center">
                        <video class="" id="preview"></video>
                        <canvas class="" id="output"></canvas>
                        <img class="" id="result" src="" alt="">
                        <br>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button id="capture" class="btn btn-danger">ambil</button>
                        <!-- form data absen In -->
                        <form action="/simpan_absen" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="nip" value="{{Auth::user()->nip}}">
                            <input id="value_gambar" type="hidden" name="gambar">
                            <p id="status"></p>
                            <button id="btnsimpan" type="submit" class="btn btn-success">simpan</button>
                        </form>
                        <!-- Form data absen Out -->
                        <form action="/simpan_absenout" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="nip">
                            <input id="value_gambar" type="hidden" name="gambar">
                            <input type="hidden" name="time">
                            <input type="hidden" name="status">
                            <button id="btnsimpanout" type="submit" class="btn btn-success">simpan out</button>
                        </form>
                        <!-- Tombol ulang -->
                        <button id="ulang" class="btn btn-info">Ulang</button>                
                    </div>
            </div>
        </div>
    </div> 
           
    <script>
        const preview = document.getElementById('preview');
        const output = document.getElementById('output');
        const capture = document.getElementById('capture');
        const result = document.getElementById('result');
        const btnsimpan = document.getElementById('btnsimpan');
        const btnsimpanout = document.getElementById('btnsimpanout');

        result.style.display = "none";
        ulang.style.display="none";
        btnsimpanout.style.display="none";
        btnsimpan.style.display="none";
        
        // mengambil API dari get user media
        navigator.mediaDevices.getUserMedia({
            audio: false,
            video: {
                width: 400,
                height: 400
            }
        })
        .then(stream => {
            preview.srcObject = stream;
            preview.play();
        })
        .catch(error => {
            console.error(error);
        });
        // Fungsi tombol ambil gambar
        capture.addEventListener('click', () => {
            const context = output.getContext('2d');
            ulang.style.display="block";
            output.style.display="block";
            preview.style.display="none";
            btnsimpan.style.display="block";
            capture.style.display="none";
            output.width = 400;
            output.height = 400;
            context.drawImage(preview, 0, 0, output.width, output.height);
            result.src = output.toDataURL();
            var val = result.src;
            const value_gambar = document.getElementById('value_gambar').value = val;
        });
        //Fungsi tombol ulang
        ulang.addEventListener('click',()=>{
            ulang.style.display="none";
            preview.style.display="block";
            capture.style.display="block";
            output.style.display="none";
            btnsimpan.style.display="none";
            btnsimpanout.style.display="none";
        })
    </script>
@endsection