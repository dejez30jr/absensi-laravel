@extends('layouts.app')

@section('content')
<div class="w-full h-[100dvh]">
    <!-- === banner === -->
    <div class="bg-[#1c2e57] content-center py-20 rounded-b-[30px]">
        <h2 class="text-white text-3xl font-bold text-center">
            RIWAYAT ABSENSI
        </h2>
    </div>
    <!-- ===  end banner === -->

    <!-- === box riwayat === -->
    <div class="w-full p-4">
        <!-- pencarian -->
        <div
            class=""
        >
        <form class="w-[90%] flex flex-row gap-2 bg-white rounded-lg shadow-lg -mt-[40px] p-4 mb-4 mx-auto" action="{{ route('search.riwayat') }}" method="GET">
            <button type="submit" class="bg-blue-600 rounded-lg text-white p-2"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input
                class="flex-2 w-full bg-transparent"
                type="date"
                value="{{ request('tanggal') }}"
                placeholder="cari berdasarkan tanggal"
                name="tanggal"
                id=""
            />
        </form>
        </div>

        <!-- hasil dari riwayat absen -->
        <div class="flex flex-col gap-2 p-4">
            @forelse ($data as $p)
            <div class="flex justify-between border-b-[3px] py-6 items-center">
                <div>
                    <span
                        >{{
                        $p->created_at->timezone('Asia/Jakarta')->format('d-m-Y
                        H:i') }}</span
                    >
                    <br />
                    <span>{{ $p->pesan }}</span>
                </div>
                <div>
                    <span>
                        {{ $p->status }}
                    </span>
                </div>
            </div>
            @empty
            <div class="h-[100%] p-4 mt-6 my-auto text-center">
                <i class="text-3xl text-gray-400 fa-regular fa-hourglass"></i>
                <p class="text-gray-400">Absen tidak ditemukan</p>
            </div>
            @endforelse
            <!-- === end box riwayat === -->
        </div>
    </div>
</div>
@endsection 