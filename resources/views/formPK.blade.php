@extends('layouts.main')
@section('container')
    
    <div class="row m-2 p-2">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif

        <div class="col-md-12 col-sm-12">
            <div class="card shadow">   
                <div class="card-body">
        
                    <div class="position-absolute end-0 me-4 mt-2">
                        <a href="/settingnilai">
                            <i data-feather="settings"></i>
                        </a>
                    </div>
                    
                    <form action="/input_nilai/store" method="POST">
                        @csrf
                        <div class="select-karyawan">
                            <select class="form-select" aria-label="Default select example" name="nip" id="nip">
                                <option> Open this select menu</option>
                                @foreach ($profiles as $item)                    
                                <option value="{{ $item->id }}">
                                    {{ $item->id }} | {{ $item->nama_ktp }}
                                    <hr>
                                </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <br>
                        @foreach ($setting as $set)
                        <!-- penilaian 1 -->        
                            @if ($set->a1 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a1 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot1 }}, Type:{{ $set->type1 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s1" value="0" checked>
                                            <input type="radio" id="star5s1" name="s1" value="5">
                                            <label for="star5s1" title="text">5 stars</label>
                                            <input type="radio" id="star4s1" name="s1" value="4">
                                            <label for="star4s1" title="text">4 stars</label>
                                            <input type="radio" id="star3s1" name="s1" value="3">
                                            <label for="star3s1" title="text">3 stars</label>
                                            <input type="radio" id="star2s1" name="s1" value="2">
                                            <label for="star2s1" title="text">2 stars</label>
                                            <input type="radio" id="star1s1" name="s1" value="1">
                                            <label for="star1s1" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                            <!-- penilaian 2 -->        
                            @if ($set->a2 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a2 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot2 }}, Type:{{ $set->type2 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s2" value="0" checked>
                                            <input type="radio" id="star5s2" name="s2" value="5">
                                            <label for="star5s2" title="text">5 stars</label>
                                            <input type="radio" id="star4s2" name="s2" value="4">
                                            <label for="star4s2" title="text">4 stars</label>
                                            <input type="radio" id="star3s2" name="s2" value="3">
                                            <label for="star3s2" title="text">3 stars</label>
                                            <input type="radio" id="star2s2" name="s2" value="2">
                                            <label for="star2s2" title="text">2 stars</label>
                                            <input type="radio" id="star1s2" name="s2" value="1">
                                            <label for="star1s2" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif  
                            <!-- penilaian 3 -->        
                            @if ($set->a3 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a3 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot3 }}, Type:{{ $set->type3 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s3" value="0" checked>
                                            <input type="radio" id="star5s3" name="s3" value="5">
                                            <label for="star5s3" title="text">5 stars</label>
                                            <input type="radio" id="star4s3" name="s3" value="4">
                                            <label for="star4s3" title="text">4 stars</label>
                                            <input type="radio" id="star3s3" name="s3" value="3">
                                            <label for="star3s3" title="text">3 stars</label>
                                            <input type="radio" id="star2s3" name="s3" value="2">
                                            <label for="star2s3" title="text">2 stars</label>
                                            <input type="radio" id="star1s3" name="s3" value="1">
                                            <label for="star1s3" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif 
                            <!-- penilaian 4 -->        
                            @if ($set->a4 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a4 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot4 }}, Type:{{ $set->type4 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s4" value="0" checked>
                                            <input type="radio" id="star5s4" name="s4" value="5">
                                            <label for="star5s4" title="text">5 stars</label>
                                            <input type="radio" id="star4s4" name="s4" value="4">
                                            <label for="star4s4" title="text">4 stars</label>
                                            <input type="radio" id="star3s4" name="s4" value="3">
                                            <label for="star3s4" title="text">3 stars</label>
                                            <input type="radio" id="star2s4" name="s4" value="2">
                                            <label for="star2s4" title="text">2 stars</label>
                                            <input type="radio" id="star1s4" name="s4" value="1">
                                            <label for="star1s4" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif 
                            <!-- penilaian 5 -->        
                            @if ($set->a5 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a5 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot5 }}, Type:{{ $set->type5 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s5" value="0" checked>
                                            <input type="radio" id="star5s5" name="s5" value="5">
                                            <label for="star5s5" title="text">5 stars</label>
                                            <input type="radio" id="star4s5" name="s5" value="4">
                                            <label for="star4s5" title="text">4 stars</label>
                                            <input type="radio" id="star3s5" name="s5" value="3">
                                            <label for="star3s5" title="text">3 stars</label>
                                            <input type="radio" id="star2s5" name="s5" value="2">
                                            <label for="star2s5" title="text">2 stars</label>
                                            <input type="radio" id="star1s5" name="s5" value="1">
                                            <label for="star1s5" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                            <!-- penilaian 6 -->        
                            @if ($set->a6 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h6 class="card-title text-center">{{ $set->a6 }}</h6>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot6 }}, Type:{{ $set->type6 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s6" value="0" checked>
                                            <input type="radio" id="star5s6" name="s6" value="5">
                                            <label for="star5s6" title="text">5 stars</label>
                                            <input type="radio" id="star4s6" name="s6" value="4">
                                            <label for="star4s6" title="text">4 stars</label>
                                            <input type="radio" id="star3s6" name="s6" value="3">
                                            <label for="star3s6" title="text">3 stars</label>
                                            <input type="radio" id="star2s6" name="s6" value="2">
                                            <label for="star2s6" title="text">2 stars</label>
                                            <input type="radio" id="star1s6" name="s6" value="1">
                                            <label for="star1s6" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif             
                        <!-- penilaian 7 -->        
                            @if ($set->a7 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a7 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot7 }}, Type:{{ $set->type7 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s7" value="0" checked>
                                            <input type="radio" id="star5s7" name="s7" value="5">
                                            <label for="star5s7" title="text">5 stars</label>
                                            <input type="radio" id="star4s7" name="s7" value="4">
                                            <label for="star4s7" title="text">4 stars</label>
                                            <input type="radio" id="star3s7" name="s7" value="3">
                                            <label for="star3s7" title="text">3 stars</label>
                                            <input type="radio" id="star2s7" name="s7" value="2">
                                            <label for="star2s7" title="text">2 stars</label>
                                            <input type="radio" id="star1s7" name="s7" value="1">
                                            <label for="star1s7" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif  
                        <!-- penilaian 8 -->        
                            @if ($set->a8 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a8 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot8 }}, Type:{{ $set->type8 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s8" value="0" checked>
                                            <input type="radio" id="star5s8" name="s8" value="5">
                                            <label for="star5s8" title="text">5 stars</label>
                                            <input type="radio" id="star4s8" name="s8" value="4">
                                            <label for="star4s8" title="text">4 stars</label>
                                            <input type="radio" id="star3s8" name="s8" value="3">
                                            <label for="star3s8" title="text">3 stars</label>
                                            <input type="radio" id="star2s8" name="s8" value="2">
                                            <label for="star2s8" title="text">2 stars</label>
                                            <input type="radio" id="star1s8" name="s8" value="1">
                                            <label for="star1s8" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 9 -->        
                            @if ($set->a9 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a9 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot9 }}, Type:{{ $set->type9 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s9" value="0" checked>
                                            <input type="radio" id="star5s9" name="s9" value="5">
                                            <label for="star5s9" title="text">5 stars</label>
                                            <input type="radio" id="star4s9" name="s9" value="4">
                                            <label for="star4s9" title="text">4 stars</label>
                                            <input type="radio" id="star3s9" name="s9" value="3">
                                            <label for="star3s9" title="text">3 stars</label>
                                            <input type="radio" id="star2s9" name="s9" value="2">
                                            <label for="star2s9" title="text">2 stars</label>
                                            <input type="radio" id="star1s9" name="s9" value="1">
                                            <label for="star1s9" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif  
                        <!-- penilaian 10 -->        
                            @if ($set->a10 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a10 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot10 }}, Type:{{ $set->type10 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s10" value="0" checked>
                                            <input type="radio" id="star5s10" name="s10" value="5">
                                            <label for="star5s10" title="text">5 stars</label>
                                            <input type="radio" id="star4s10" name="s10" value="4">
                                            <label for="star4s10" title="text">4 stars</label>
                                            <input type="radio" id="star3s10" name="s10" value="3">
                                            <label for="star3s10" title="text">3 stars</label>
                                            <input type="radio" id="star2s10" name="s10" value="2">
                                            <label for="star2s10" title="text">2 stars</label>
                                            <input type="radio" id="star1s10" name="s10" value="1">
                                            <label for="star1s10" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 11 -->        
                            @if ($set->a11 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a11 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot11 }}, Type:{{ $set->type11 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s11" value="0" checked>
                                            <input type="radio" id="star5s11" name="s11" value="5">
                                            <label for="star5s11" title="text">5 stars</label>
                                            <input type="radio" id="star4s11" name="s11" value="4">
                                            <label for="star4s11" title="text">4 stars</label>
                                            <input type="radio" id="star3s11" name="s11" value="3">
                                            <label for="star3s11" title="text">3 stars</label>
                                            <input type="radio" id="star2s11" name="s11" value="2">
                                            <label for="star2s11" title="text">2 stars</label>
                                            <input type="radio" id="star1s11" name="s11" value="1">
                                            <label for="star1s11" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 12 -->        
                            @if ($set->a12 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a12 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot12 }}, Type:{{ $set->type12 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s12" value="0" checked>
                                            <input type="radio" id="star5s12" name="s12" value="5">
                                            <label for="star5s12" title="text">5 stars</label>
                                            <input type="radio" id="star4s12" name="s12" value="4">
                                            <label for="star4s12" title="text">4 stars</label>
                                            <input type="radio" id="star3s12" name="s12" value="3">
                                            <label for="star3s12" title="text">3 stars</label>
                                            <input type="radio" id="star2s12" name="s12" value="2">
                                            <label for="star2s12" title="text">2 stars</label>
                                            <input type="radio" id="star1s12" name="s12" value="1">
                                            <label for="star1s12" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 13 -->        
                            @if ($set->a13 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a13 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot13 }}, Type:{{ $set->type13 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s13" value="0" checked>
                                            <input type="radio" id="star5s13" name="s13" value="5">
                                            <label for="star5s13" title="text">5 stars</label>
                                            <input type="radio" id="star4s13" name="s13" value="4">
                                            <label for="star4s13" title="text">4 stars</label>
                                            <input type="radio" id="star3s13" name="s13" value="3">
                                            <label for="star3s13" title="text">3 stars</label>
                                            <input type="radio" id="star2s13" name="s13" value="2">
                                            <label for="star2s13" title="text">2 stars</label>
                                            <input type="radio" id="star1s13" name="s13" value="1">
                                            <label for="star1s13" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif    
                        <!-- penilaian 14 -->        
                            @if ($set->a14 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a14 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot14 }}, Type:{{ $set->type14 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s14" value="0" checked>
                                            <input type="radio" id="star5s14" name="s14" value="5">
                                            <label for="star5s14" title="text">5 stars</label>
                                            <input type="radio" id="star4s14" name="s14" value="4">
                                            <label for="star4s14" title="text">4 stars</label>
                                            <input type="radio" id="star3s14" name="s14" value="3">
                                            <label for="star3s14" title="text">3 stars</label>
                                            <input type="radio" id="star2s14" name="s14" value="2">
                                            <label for="star2s14" title="text">2 stars</label>
                                            <input type="radio" id="star1s14" name="s14" value="1">
                                            <label for="star1s14" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 15 -->        
                            @if ($set->a15 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a15 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot15 }}, Type:{{ $set->type15 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s15" value="0" checked>
                                            <input type="radio" id="star5s15" name="s15" value="5">
                                            <label for="star5s15" title="text">5 stars</label>
                                            <input type="radio" id="star4s15" name="s15" value="4">
                                            <label for="star4s15" title="text">4 stars</label>
                                            <input type="radio" id="star3s15" name="s15" value="3">
                                            <label for="star3s15" title="text">3 stars</label>
                                            <input type="radio" id="star2s15" name="s15" value="2">
                                            <label for="star2s15" title="text">2 stars</label>
                                            <input type="radio" id="star1s15" name="s15" value="1">
                                            <label for="star1s15" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 16 -->        
                            @if ($set->a16 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a16 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot16 }}, Type:{{ $set->type16 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s16" value="0" checked>
                                            <input type="radio" id="star5s16" name="s16" value="5">
                                            <label for="star5s16" title="text">5 stars</label>
                                            <input type="radio" id="star4s16" name="s16" value="4">
                                            <label for="star4s16" title="text">4 stars</label>
                                            <input type="radio" id="star3s16" name="s16" value="3">
                                            <label for="star3s16" title="text">3 stars</label>
                                            <input type="radio" id="star2s16" name="s16" value="2">
                                            <label for="star2s16" title="text">2 stars</label>
                                            <input type="radio" id="star1s16" name="s16" value="1">
                                            <label for="star1s16" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 17 -->        
                            @if ($set->a17 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a17 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot17 }}, Type:{{ $set->type17 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s17" value="0" checked>
                                            <input type="radio" id="star5s17" name="s17" value="5">
                                            <label for="star5s17" title="text">5 stars</label>
                                            <input type="radio" id="star4s17" name="s17" value="4">
                                            <label for="star4s17" title="text">4 stars</label>
                                            <input type="radio" id="star3s17" name="s17" value="3">
                                            <label for="star3s17" title="text">3 stars</label>
                                            <input type="radio" id="star2s17" name="s17" value="2">
                                            <label for="star2s17" title="text">2 stars</label>
                                            <input type="radio" id="star1s17" name="s17" value="1">
                                            <label for="star1s17" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 18 -->        
                            @if ($set->a18 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a18 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot18 }}, Type:{{ $set->type18 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s18" value="0" checked>
                                            <input type="radio" id="star5s18" name="s18" value="5">
                                            <label for="star5s18" title="text">5 stars</label>
                                            <input type="radio" id="star4s18" name="s18" value="4">
                                            <label for="star4s18" title="text">4 stars</label>
                                            <input type="radio" id="star3s18" name="s18" value="3">
                                            <label for="star3s18" title="text">3 stars</label>
                                            <input type="radio" id="star2s18" name="s18" value="2">
                                            <label for="star2s18" title="text">2 stars</label>
                                            <input type="radio" id="star1s18" name="s18" value="1">
                                            <label for="star1s18" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 19 -->        
                            @if ($set->a19 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a19 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot19 }}, Type:{{ $set->type19 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s19" value="0" checked>
                                            <input type="radio" id="star5s19" name="s19" value="5">
                                            <label for="star5s19" title="text">5 stars</label>
                                            <input type="radio" id="star4s19" name="s19" value="4">
                                            <label for="star4s19" title="text">4 stars</label>
                                            <input type="radio" id="star3s19" name="s19" value="3">
                                            <label for="star3s19" title="text">3 stars</label>
                                            <input type="radio" id="star2s19" name="s19" value="2">
                                            <label for="star2s19" title="text">2 stars</label>
                                            <input type="radio" id="star1s19" name="s19" value="1">
                                            <label for="star1s19" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        <!-- penilaian 20 -->        
                            @if ($set->a20 != null)
                                <div class="card text-dark bg-light mb-3">
                                    <div class="card-header p-4">
                                        <h5 class="card-title text-center">{{ $set->a20 }}</h5>
                                        <p class="text-bobot"> Bobot:{{ $set->bobot20 }}, Type:{{ $set->type20 }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="rate">
                                            <input type="hiddent" name="s20" value="0" checked>
                                            <input type="radio" id="star5s20" name="s20" value="5">
                                            <label for="star5s20" title="text">5 stars</label>
                                            <input type="radio" id="star4s20" name="s20" value="4">
                                            <label for="star4s20" title="text">4 stars</label>
                                            <input type="radio" id="star3s20" name="s20" value="3">
                                            <label for="star3s20" title="text">3 stars</label>
                                            <input type="radio" id="star2s20" name="s20" value="2">
                                            <label for="star2s20" title="text">2 stars</label>
                                            <input type="radio" id="star1s20" name="s20" value="1">
                                            <label for="star1s20" title="text">1 star</label>
                                        </div>                  
                                    </div>
                                </div>
                            @endif
                        @endforeach
                            <div class="p-3 d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    

@endsection