@extends('layouts.app')

@section('content')

<div class="flex mb-[30px] items-center justify-center p-4">

    <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-6">

        <h2 class="text-2xl font-bold text-center mb-6 text-[#1c2e57]">
            Form Absensi
        </h2>

        <form action="{{ route('create.absen') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <!-- Nama -->
            <div>
                <label class="text-sm text-gray-600">Nama</label>
                <input
                    type="text"
                    name="name"
                    readonly
                    value="{{ auth()->user()->name }}"
                    class="w-full border rounded-lg p-2 bg-gray-100">
            </div>

            <!-- Kelas -->
            <div>
                <label class="text-sm text-gray-600">Kelas</label>
                <select name="kelas" class="w-full border rounded-lg p-2">
                    <option value="">Pilih Kelas</option>
                    <option value="12 rpl 1">12 RPL 1</option>
                    <option value="12 rpl 2">12 RPL 2</option>
                </select>
            </div>

            <!-- Status -->
            <div>
                <label class="text-sm text-gray-600">Status</label>
                <select name="status" class="w-full border rounded-lg p-2">
                    <option value="">Pilih Status</option>
                    <option value="hadir">Hadir</option>
                    <option value="sakit">Sakit</option>
                    <option value="izin">Izin</option>
                </select>
            </div>

            <!-- Upload Foto -->
            <div>
                <label class="text-sm text-gray-600">Upload Selfie</label>
                <input
                    type="file"
                    name="gambar"
                    class="w-full border rounded-lg p-2 bg-gray-50">
            </div>

            <!-- Pesan -->
            <div>
                <label class="text-sm text-gray-600">Pesan</label>
                <textarea
                    name="pesan"
                    rows="3"
                    placeholder="Tulis pesan..."
                    class="w-full border rounded-lg p-2"></textarea>
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-[#1c2e57] text-white p-3 rounded-lg hover:bg-[#152341] transition">

                Kirim Absensi

            </button>

        </form>

    </div>

</div>

@endsection