@extends('layouts.app')

@section('content')

<!-- ==== box screen ===== -->
<div class="w-full h-[100dvh]">

    <!-- === banner === -->
    <div class="w-full pb-20 pt-4 bg-[#1c2e57] rounded-b-[30px]">
        <div class="flex gap-2 justify-between items-center p-4 text-white">

            <div class="flex flex-col">
                <span class="text-3xl">Selamat Datang</span>
                <p class="font-bold text-2xl">
                    {{ auth()->user()->name }}
                </p>
            </div>

            <div class="text-2xl">
                <a href="/profil">
                     <i class="fa-solid fa-user"></i>
                </a>
            </div>

        </div>
    </div>
    <!-- ==== banner end === -->


    <!-- ==== content ==== -->
    <div class="w-full px-4">

        <!-- === box absen === -->
        <div class="w-[90%] p-4 mx-auto -mt-[50px] rounded-lg bg-white shadow-lg">

            <!-- waktu -->
            <div class="flex justify-between items-center">

                <div class="flex gap-2 items-center">
                    <span class="text-4xl">
                        <i class="fa-solid fa-clock"></i>
                    </span>

                    @if($jamHadir)
                    <p class="font-bold">
                        {{ $jamHadir->format("H:i") }}
                    </p>
                    @else
                    <p class="font-bold">--:--</p>
                    @endif
                </div>

                @if ($statusAbsen)
                    <span
                        class="p-2 px-4 rounded text-white
                        {{ $statusAbsen == 'hadir' ? 'bg-green-600' : '' }}
                        {{ $statusAbsen == 'izin' ? 'bg-yellow-500' : '' }}
                        {{ $statusAbsen == 'sakit' ? 'bg-red-500' : '' }}
                        {{ $statusAbsen == 'dispen' ? 'bg-blue-500' : '' }}">
                        {{ $statusAbsen }}
                    </span>
                @else
                    <span class="bg-gray-400 p-2 px-4 text-white rounded">
                        ......
                    </span>
                @endif

            </div>

            <!-- button absen -->
            @if ($sudahAbsen)

                <button
                    class="p-2 w-full bg-gray-400 mt-2 text-white cursor-not-allowed"
                    disabled>
                    SUDAH ABSEN
                </button>

            @else

                <a href="{{ route('absen.masuk') }}">
                    <button
                        class="p-2 w-full bg-[#1c2e57] mt-2 text-white rounded-lg">
                        ABSEN
                    </button>
                </a>

            @endif

        </div>
        <!-- === box absen end === -->


        <!-- === riwayat absen === -->
        <div class="py-6 text-gray-700">

            <div class="flex justify-between items-center">
                <h3 class="text-lg">Riwayat</h3>
            </div>

            @if ($riwayat->isEmpty())

                <div class="p-4 mt-6 text-center">
                    <i class="text-3xl text-gray-400 fa-regular fa-hourglass"></i>
                    <p class="text-gray-400">Belum ada riwayat absen</p>
                </div>

            @else

                @foreach ($riwayat as $p)

                <div class="flex flex-col gap-2 mt-2 border-b-[3px] p-4">

                    <div class="flex justify-between items-center">

                        <div>
                            <span>
                                {{ $p->created_at->timezone('Asia/Jakarta')->format('d-m-Y H:i') }}
                            </span>
                            <br>
                            <span>{{ $p->pesan }}</span>
                        </div>

                        <div>
                            <span>{{ $p->status }}</span>
                        </div>

                    </div>

                </div>

                @endforeach

            @endif

        </div>
        <!-- === riwayat absen end === -->

    </div>
</div>

@endsection