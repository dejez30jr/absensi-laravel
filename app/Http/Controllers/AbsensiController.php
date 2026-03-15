<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AbsensiController extends Controller {
    // variabel data;

    public function index() {

    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {

        $sudahAbsen = Absen::where( 'user_id', auth()->id() )
        ->whereDate( 'created_at', Carbon::today() )
        ->exists();

        if ( $sudahAbsen ) {
            return redirect()->route( 'dashboard' )->with( 'error', 'Anda sudah melakukan absen hari ini.' );
        }
        return view( 'absensi' );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        $validated = $request->validate( [
            'name' => 'required',
            'kelas' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'pesan' => 'nullable',
        ] );

        $validated[ 'user_id' ] = auth()->id();
        $gambarPath = $request->file( 'gambar' )->store( 'absen', 'public' );
        $validated[ 'gambar' ] = $gambarPath;

        Absen::create( $validated );

        return redirect()->route( 'dashboard' )->with( 'success', 'Absen berhasil dibuat.' );

    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        //
    }
}
