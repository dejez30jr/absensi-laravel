@extends('layouts.app')

@section('content')
<div class="h-[100dvh] text-gray-400 text-3xl w-full content-center">
    <!-- === banner === -->
    <div class="bg-[#1c2e57] content-center py-20">
        <h2 class="text-white text-3xl font-bold text-center">PANDUAN ABSEN</h2>
    </div>
    <!-- ===  end banner === -->

    <section class="min-h-screen bg-gray-50 px-4 pb-[100px] py-10">
    <div class="max-w-2xl mx-auto">
        <!-- Steps -->
        <div class="space-y-6">

            <!-- Step 1 -->
            <div class="bg-white border rounded-xl p-5 shadow-md">
                <div class="flex items-center gap-4">
                    <div>
                        <h2 class="font-medium text-gray-900">Login ke Akun</h2>
                        <p class="text-sm text-gray-600 mt-1">
                            Masukkan <b>email</b> dan <b>password</b> yang terdaftar, lalu klik tombol
                            <span class="font-bold">Masuk</span>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="bg-white border rounded-xl p-5 shadow-md">
                <div class="flex items-center gap-4">
                    <div>
                        <h2 class="font-medium text-gray-900">Buka Menu Absen</h2>
                        <p class="text-sm text-gray-600 mt-1">
                            Setelah login, klik tombol
                            <span class="font-bold">ABSEN</span>
                            pada halaman beranda.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="bg-white border rounded-xl p-5 shadow-md">
                <div class="flex items-center gap-4">
                    <div>
                        <h2 class="font-medium text-gray-900">Aturan Absensi Harian</h2>
                        <ul class="text-sm text-gray-600 mt-2 list-disc pl-5 space-y-1">
                            <li class="text-sm text-gray-600 mt-1">
                                Setiap pengguna <b>hanya dapat melakukan 1 kali absen dalam 1 hari</b>.
                                Jika sudah absen, sistem akan otomatis menolak absensi berikutnya.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="bg-white border rounded-xl p-5 shadow-md">
                <div class="flex items-center gap-4">
                    <div>
                        <h2 class="font-medium text-gray-900">Izin & Validasi Lokasi</h2>
                        <ul class="text-sm text-gray-600 mt-2 list-disc pl-5 space-y-1">
                            <li>Aktifkan izin lokasi (GPS) pada browser</li>
                            <li>
                              Klik tombol izinkan ambil lokasi
                            </li>
                            <li>Sistem memvalidasi jarak dari lokasi sekolah</li>
                        </ul>
                        <p class="text-xs text-gray-500 mt-2">
                            Absensi hanya dapat dilakukan <b>di dalam radius area sekolah</b>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="bg-white border rounded-xl p-5 shadow-md">
                <div class="flex items-center gap-4">
                    <div>
                        <h2 class="font-medium text-gray-900">Isi & Kirim Absensi</h2>
                        <ul class="text-sm text-gray-600 mt-2 list-disc pl-5 space-y-1">
                            <li>Nama, tanggal, jam, dan lokasi terisi otomatis</li>
                            <li>Pilih status kehadiran</li>
                            <li>Unggah file surat sakit/dokter jika Status nya sakit</li>
                            <li>Pilih kelas</li>
                            <li>Tambahkan keterangan Opsional (jika absen nya sakit, dispen, izin)</li>
                        </ul>
                        <p class="text-sm text-gray-600 mt-2">
                            Klik tombol <span class="font-bold">KIRIM</span>
                            untuk menyimpan absensi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="bg-white border border-red-200 rounded-xl p-5 shadow-md">
                <div class="flex items-center gap-4">
                    <div>
                        <h2 class="font-medium text-red-700">Pelanggaran & Sanksi</h2>
                        <p class="text-sm text-red-600 mt-1">
                            Apabila pengguna melakukan manipulasi lokasi, memberikan data palsu,
                            atau mencoba melakukan absen lebih dari satu kali dalam sehari,
                            maka <b>absensi akan ditolak</b> dan dapat dikenakan
                            <b>sanksi sesuai peraturan sekolah</b>.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Info Success -->
        <div class="mt-6 bg-green-50 border border-green-200 rounded-xl p-5">
            <h3 class="font-medium text-green-800">Absensi Berhasil Disimpan</h3>
            <p class="text-sm text-green-700 mt-1">
                Data absensi Anda dapat dilihat kembali pada menu riwayat.
            </p>
        </div>
        
        <!-- login -->
        <div class="mt-6 bg-blue-50 border border-green-200 rounded-xl p-5">
            <a href="/">
            <h3 class="font-medium text-blue-800">Login Sekarang</h3>
            <p class="text-sm text-blue-700 mt-1">
              yuk mulai absensi kamu sekarang <span class="font-bold">👉Mulai</span>
            </p>
            </a>
        </div>
    </div>
</section>
</div>
@endsection
