<?php

namespace App\Http\Controllers;

use App\Models\In;
use App\Models\Out;
use App\Models\User;
use App\Models\Nilai;
use App\Models\Saw;
use App\Models\Penilaian;
use App\Models\Pengajuan;
use App\Models\Settingnilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard', [
            "title" => "Dashboard"
        ]);
    }
}
