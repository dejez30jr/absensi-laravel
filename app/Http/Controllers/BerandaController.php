<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BerandaController extends Controller
{
    public function index()
    {
        // variabel data
        $sudahAbsen = false;
        $statusAbsen = null;
        $jamHadir = null;
        $riwayat = [];

        $riwayat = Absen::where('user_id', auth()->id())
        ->orderBy('created_at', 'desc')
        ->limit(5)
        ->get();

        $sudahAbsen = Absen::where('user_id', auth()->id())
        ->whereDate('created_at', Carbon::today())
        ->first();

        if ($sudahAbsen) {
            $statusAbsen = $sudahAbsen->status;
            $jamHadir = $sudahAbsen->created_at;
        }
         // cek apakah user sudah absen hari ini
        return view('dashboard', compact('sudahAbsen', 'statusAbsen', 'jamHadir', 'riwayat'));
    }
}
