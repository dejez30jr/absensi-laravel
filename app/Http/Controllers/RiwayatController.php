<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function cari(Request $request){
        $query = Absen::where('user_id', auth()->id());  
        if($request->tanggal){
            $query->whereDate('created_at', $request->tanggal);
        }

        $data = $query->get();

        return view('riwayat', compact('data'));
    }
}

