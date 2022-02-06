<?php

namespace App\Http\Controllers;

use App\Models\Upot;
use Illuminate\Support\Facades\App;

use App\Imports\UpotImport;
use App\Exports\UpotExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
//sambungkan ke library PDF
use PDF;

class UpotController extends Controller
{
    public function index(){
        return view('upah_potongan',[
            "title" => "Upah dan potongan",
            "upots" => Upot::all()
        ]);
    }

    public function CetakSlip($id)
    {
        $data = ["title" => "Slip gaji",
                "upots" => Upot::find($id)];

        $pdf = PDF::loadView('cetak_slip_gaji', $data);
        return $pdf->stream('slip_gaji.pdf');
    }

    public function upotsexport(){
        return Excel::download(new UpotExport,'Upah_potongan.xls');
    }

    public function UpotImport(Request $request){
        
        Upot::truncate();

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $file->move('DataUpot',$nama_file);

        Excel::import(new UpotImport, public_path('/DataUpot/'.$nama_file));
        return redirect('/data_karyawan');
    }



}
