@extends('layouts.main')
@section('container')
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
        <div class="container">
          <h1 class="main-title">Hallo {{ auth()->user()->name }},</h1>
          <h1>Semoga harimu menyenangkan</h1>  
      </div>
    </main>

  
@endsection
