<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web absensi deris</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    body{
        font-family: 'Poppins', sans-serif;
        background-image: url('https://smknuruliman.sch.id/web_sekolah/public/storage/cms-img/01K9K8WRVPNT8AXVKDWMDZMHP0.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<body class="md:px-[35%] h-[100dvh] overflow-auto">
<main class="w-full h-full overflow-auto">

   <!-- alert success -->
    @if (session('success'))
       <script>
        Swal.fire({
          title: "{{ session('success') }}",
          icon: "success",
          draggable: true
        });
       </script>
    @endif

    <!-- content -->
    <div class="content shadow-lg bg-white pb-[30%]">
        @yield('content')
    </div>

     <!-- nav bottom -->
    <div class="p-2 fixed md:px-[36%] bottom-0 left-0 w-full">
    <nav class="w-full rounded-[30px] grid grid-cols-3 p-4 bg-[#1c2e57] shadow-[0_-2px_6px_rgba(0,0,0,0.05),0_2px_6px_rgba(0,0,0,0.05)] p-4">
        <a class="text-center text-white grid grid-cols-1" href="/">
            <i class="mx-auto fa-solid fa-house"></i>
            <span class="text-[15px]">Beranda</span>
        </a>
        <a class="text-center text-white grid grid-cols-1" href="/riwayat">
            <i class="mx-auto fa-solid fa-clock-rotate-left"></i>
            <span class="text-[15px]">Riwayat</span>
        </a>
        <a class="text-center text-white grid grid-cols-1" href="/panduan">
            <i class="mx-auto fa-solid fa-book-open-reader"></i>
            <span class="text-[15px]">Panduan</span>
        </a>
    </nav>
    </div>
        
</main>
</body>
</html>