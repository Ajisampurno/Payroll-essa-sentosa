@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sx-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Setting Nilai</h3>
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session()->has('gagal'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('gagal') }}
                            </div>
                        @endif

                        <div class="table-setting">
                            
                            <form action="/simpansetting" method="post">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>NO</th>
                                            <th>Alternative</th>
                                            <th>Bobot</th>
                                            <th>Type</th>
                                        </tr>
                                    </thead>

                                    @foreach ($settingnilai as $isi)
                                    <tbody>
                                        <!-- penilaian 1 -->
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>
                                                <input class="alternative" type="text" name="a1" id="a1" value="{{ $isi->a1 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot1" id="bobot1" style="width: 50px" value="{{ $isi->bobot1 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type1" name="type1">
                                                    @if ($isi->type1 != null)
                                                        @if($isi->type1 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 2 -->
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>
                                                <input class="alternative" type="text" name="a2" id="a2" value="{{ $isi->a2 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot2" id="bobot2" style="width: 50px" value="{{ $isi->bobot2 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type2" name="type2">
                                                    @if ($isi->type2 != null)
                                                        @if($isi->type2 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 3 -->
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>
                                                <input class="alternative" type="text" name="a3" id="a3" value="{{ $isi->a3 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot3" id="bobot3" style="width: 50px" value="{{ $isi->bobot3 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type3" name="type3">
                                                    @if ($isi->type3 != null)
                                                        @if($isi->type3 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 4 -->
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>
                                                <input class="alternative" type="text" name="a4" id="a4" value="{{ $isi->a4 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot4" id="bobot4" style="width: 50px" value="{{ $isi->bobot4 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type4" name="type4">
                                                    @if ($isi->type4 != null)
                                                        @if($isi->type4 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 5 -->
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>
                                                <input class="alternative" type="text" name="a5" id="a5" value="{{ $isi->a5 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot5" id="bobot5" style="width: 50px" value="{{ $isi->bobot5 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type5" name="type5">
                                                    @if ($isi->type5 != null)
                                                        @if($isi->type5 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 6 -->
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td>
                                                <input class="alternative" type="text" name="a6" id="a6" value="{{ $isi->a6 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot6" id="bobot6" style="width: 50px" value="{{ $isi->bobot6 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type6" name="type6">
                                                    @if ($isi->type6 != null)
                                                        @if($isi->type6 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 7 -->
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td>
                                                <input class="alternative" type="text" name="a7" id="a7" value="{{ $isi->a7 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot7" id="bobot7" style="width: 50px" value="{{ $isi->bobot7 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type7" name="type7">
                                                    @if ($isi->type7 != null)
                                                        @if($isi->type7 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 8 -->
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td>
                                                <input class="alternative" type="text" name="a8" id="a8" value="{{ $isi->a8 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot8" id="bobot8" style="width: 50px" value="{{ $isi->bobot8 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type8" name="type8">
                                                    @if ($isi->type8 != null)
                                                        @if($isi->type8 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 9 -->
                                        <tr>
                                            <td class="text-center">9</td>
                                            <td>
                                                <input class="alternative" type="text" name="a9" id="a9" value="{{ $isi->a9 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot9" id="bobot9" style="width: 50px" value="{{ $isi->bobot9 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type9" name="type9">
                                                    @if ($isi->type9 != null)
                                                        @if($isi->type9 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 10 -->
                                        <tr>
                                            <td class="text-center">10</td>
                                            <td>
                                                <input class="alternative" type="text" name="a10" id="a10" value="{{ $isi->a10 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot10" id="bobot10" style="width: 50px" value="{{ $isi->bobot10 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type10" name="type10">
                                                    @if ($isi->type10 != null)
                                                        @if($isi->type10 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 11 -->
                                        <tr>
                                            <td class="text-center">11</td>
                                            <td>
                                                <input class="alternative" type="text" name="a11" id="a11" value="{{ $isi->a11 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot11" id="bobot11" style="width: 50px" value="{{ $isi->bobot11 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type11" name="type11">
                                                    @if ($isi->type11 != null)
                                                        @if($isi->type11 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 12 -->
                                        <tr>
                                            <td class="text-center">12</td>
                                            <td>
                                                <input class="alternative" type="text" name="a12" id="a12" value="{{ $isi->a12 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot12" id="bobot12" style="width: 50px" value="{{ $isi->bobot12 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type12" name="type12">
                                                    @if ($isi->type12 != null)
                                                        @if($isi->type12 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 13 -->
                                        <tr>
                                            <td class="text-center">13</td>
                                            <td>
                                                <input class="alternative" type="text" name="a13" id="a13" value="{{ $isi->a13 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot13" id="bobot13" style="width: 50px" value="{{ $isi->bobot13 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type13" name="type13">
                                                    @if ($isi->type13 != null)
                                                        @if($isi->type13 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 14 -->
                                        <tr>
                                            <td class="text-center">14</td>
                                            <td>
                                                <input class="alternative" type="text" name="a14" id="a14" value="{{ $isi->a14 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot14" id="bobot14" style="width: 50px" value="{{ $isi->bobot14 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type14" name="type14">
                                                    @if ($isi->type14 != null)
                                                        @if($isi->type14 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 15 -->
                                        <tr>
                                            <td class="text-center">15</td>
                                            <td>
                                                <input class="alternative" type="text" name="a15" id="a15" value="{{ $isi->a15 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot15" id="bobot15" style="width: 50px" value="{{ $isi->bobot15 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type15" name="type15">
                                                    @if ($isi->type15 != null)
                                                        @if($isi->type7 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 16 -->
                                        <tr>
                                            <td class="text-center">16</td>
                                            <td>
                                                <input class="alternative" type="text" name="a16" id="a16" value="{{ $isi->a16 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot16" id="bobot16" style="width: 50px" value="{{ $isi->bobot16 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type16" name="type16">
                                                    @if ($isi->type16 != null)
                                                        @if($isi->type16 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 17 -->
                                        <tr>
                                            <td class="text-center">17</td>
                                            <td>
                                                <input class="alternative" type="text" name="a17" id="a17" value="{{ $isi->a17 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot17" id="bobot17" style="width: 50px" value="{{ $isi->bobot17 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type17" name="type17">
                                                    @if ($isi->type17 != null)
                                                        @if($isi->type17 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 18 -->
                                        <tr>
                                            <td class="text-center">18</td>
                                            <td>
                                                <input class="alternative" type="text" name="a18" id="a18" value="{{ $isi->a18 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot18" id="bobot18" style="width: 50px" value="{{ $isi->bobot18 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type18" name="type18">
                                                    @if ($isi->type18 != null)
                                                        @if($isi->type18 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 19 -->
                                        <tr>
                                            <td class="text-center">19</td>
                                            <td>
                                                <input class="alternative" type="text" name="a19" id="a19" value="{{ $isi->a19 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot19" id="bobot19" style="width: 50px" value="{{ $isi->bobot19 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type19" name="type19">
                                                    @if ($isi->type19 != null)
                                                        @if($isi->type19 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <!-- penilaian 20 -->
                                        <tr>
                                            <td class="text-center">20</td>
                                            <td>
                                                <input class="alternative" type="text" name="a20" id="a20" value="{{ $isi->a20 }}">
                                            </td>
                                            <td>
                                                <input class="bobot" type="number"  min="0" max="100" name="bobot20" id="bobot20" style="width: 50px" value="{{ $isi->bobot20 }}">
                                            </td>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" id="type20" name="type20">
                                                    @if ($isi->type20 != null)
                                                        @if($isi->type20 == 'Cost')
                                                            <option value="Benefit">Benefit</option>
                                                            <option selected value="Cost">Cost</option>
                                                        @else
                                                            <option value="Benefit">Benefit</option>
                                                            <option value="Cost">Cost</option>
                                                        @endif    
                                                    @else
                                                        <option value="Benefit">Benefit</option>
                                                        <option value="Cost">Cost</option>
                                                    @endif                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="submit " class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection