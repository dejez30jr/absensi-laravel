
@extends('layouts.app')

@section('content')
<!-- ==== box screen === -->
<div class="w-full h-[100dvh]">
    <!-- == banner === -->
    <div
        class="w-full p-4 py-28 bg-[#1c2e57] content-center text-center text-white"
    >
        <h1 class="text-3xl font-bold"><i class="fa-solid fa-user"></i></h1>
        <br />
    </div>
    <!-- == end banner === -->

    <!-- === content === -->
    <div
        class="bg-white p-4 py-10 pb-20 rounded-[30px] flex flex-col gap-4 -mt-[40px]"
    >
        <!-- ACCORDION ITEM -->
        <div class="border rounded-2xl overflow-hidden">
            <button
                onclick="toggleAccordion(this)"
                class="w-full flex justify-between items-center p-4 bg-gray-100 font-semibold"
            >
                Nama
                <span class="transition-transform duration-300"
                    ><i class="fa-solid fa-angle-down"></i
                ></span>
            </button>
            <div class="hidden p-6 bg-gray-300">{{ Auth()->user()->name }}</div>
        </div>

        <div class="border rounded-2xl overflow-hidden">
            <button
                onclick="toggleAccordion(this)"
                class="w-full flex justify-between items-center p-4 bg-gray-100 font-semibold"
            >
                Email
                <span class="transition-transform duration-300"
                    ><i class="fa-solid fa-angle-down"></i
                ></span>
            </button>
            <div class="hidden p-6 bg-gray-300">
                {{ Auth()->user()->email }}
            </div>
        </div>

        <div class="border rounded-2xl overflow-hidden">
            <button
                onclick="toggleAccordion(this)"
                class="w-full flex justify-between items-center p-4 bg-gray-100 font-semibold"
            >
                Password
                <span class="transition-transform duration-300"
                    ><i class="fa-solid fa-angle-down"></i
                ></span>
            </button>
            <div class="hidden p-6 bg-gray-300">*****</div>
        </div>

        <div class="border rounded-2xl overflow-hidden">
            <button
                onclick="toggleAccordion(this)"
                class="w-full flex justify-between items-center p-4 bg-gray-100 font-semibold"
            >
                Dibuat
                <span class="transition-transform duration-300"
                    ><i class="fa-solid fa-angle-down"></i
                ></span>
            </button>
            <div class="hidden p-6 bg-gray-300">
                {{ Auth()->user()->created_at }}
            </div>
        </div>

        <!-- navigasi -->
        <div class="mt-4 pb-4">
            <span
                class="bg-red-600 p-2 px-6 shadow-lg rounded-lg flex gap-2 items-center w-[fit-content] text-white"
                type="button"
                onclick="return confirm('Apakah Anda ingin keluar dari akun Anda?')">
                <form action="{{ route('logout') }}" method="post" onsubmit="return confirm('Apakah Anda ingin keluar dari akun Anda?')">
                    @csrf
                    <button type="submit">
                        <i class="ml-2 fa-solid fa-arrow-right-from-bracket"></i>Logout
                    </button>
                </form>
            </span>
        </div>
    </div>
    <!-- === end content === -->

    <script>
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector("span");

            content.classList.toggle("hidden");
            icon.classList.toggle("rotate-180");
        }
    </script>
</div>
@endsection