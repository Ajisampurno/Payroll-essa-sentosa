<?php

namespace App\Http\Controllers;

use App\Models\In;
use App\Models\Out;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class AbsenController extends Controller
{
    public function index()
    {
        return view('absen', [
            "title" => "Rekam kehadiran"
        ]);
    }

    public function simpan(Request $request)
    {


        // URL gambar yang ingin diambil
        $url = $request->gambar;
        // Ambil data gambar dari URL
        $data = file_get_contents($url);

        // Buat gambar dari data
        $image = imagecreatefromstring($data);

        // Membuat nama file baru yang unik
        $uniqname = Str::uuid()->toString();

        $gambar = "storage/foto-absen/in/in" . $uniqname . '.jpg';

        // Simpan gambar dalam format PNG
        imagejpeg($image, $gambar);

        // Atau simpan gambar dalam format JPEG
        //imagejpeg($image, "gambar.jpg");

        date_default_timezone_set('Asia/Jakarta');
        $setjam = date('Hi');
        $setmenit = date('i');
        $time = date('H:i');
        $date = date('d-m-Y');

        if ($setjam <= 800) {
            $status = "in";
        } elseif ($setjam <= 900) {
            $status = "datang telat";
        } elseif ($setjam <= 1559) {
            $status = "pulang awal";
        } else {
            $status = "out";
        }

        $id = date('dmy') . Auth::user()->nip;

        try {
            if ($setjam  <= 9) {
                In::create([
                    'id' => $id,
                    'nip' => $request->nip,
                    'gambar' => $gambar,
                    'date' => $date,
                    'time' => $time,
                    'status' => $status
                ]);
            } else {
                Out::create([
                    'id' => $id,
                    'nip' => $request->nip,
                    'gambar' => $gambar,
                    'date' => $date,
                    'time' => $time,
                    'status' => $status
                ]);
            }
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                // Jika terjadi duplikat ID (error code 1062 pada MySQL), tampilkan pesan error
                $errorMessage = "Anda sudah melakukan rekam kehadiran";
                return back()->with('error', $errorMessage);
            }
        }



        return redirect('/dashboard')->with('success', 'kehadiran berhasil di rekam');
    }
}
