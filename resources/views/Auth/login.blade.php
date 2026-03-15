<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Website absensi DZ.CODES</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        />
    </head>
    <style>
        body{
        font-family: 'Poppins', sans-serif;
        background-image: url('https://smknuruliman.sch.id/web_sekolah/public/storage/cms-img/01K9K8WRVPNT8AXVKDWMDZMHP0.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        }
        /* form animasi */
        #form {
            animation: 1s up forwards;
            transition: ease-out;
        }

        @keyframes up {
            0% {
                transform: translateY(200px);
            }
        }
    </style>
    <body class="md:px-[35%] h-[100dvh]">   
    @if (session('error'))
       <script>
        Swal.fire({
          title: "{{ session('error') }}",
          icon: "danger",
          draggable: true
        });
       </script>
    @endif

      <!-- === mobile first === -->
       <div class="">

        <div
            class="w-full bg-white h-[100dvh] p-2 flex flex-col items-center justify-center"
            x-data="{ showCart: false }">
            <!-- ==== contentn screen ==== -->
            <div class="flex gap-2 px-6 flex-col">
                <h1 class="text-center text-4xl font-bold text-[#1c2e57]">DigitalAbsen</h1>
                <img src="{{ asset('images/logicon.png') }}" alt="" />
                <div class="flex gap-4 p-2 py-6 justify-center w-full">
                    <button
                        class="flex font-bold p-2 px-12 bg-[#1c2e57] rounded-[20px] shadow-lg border text-white"
                        @click="showCart = true"
                    >
                        Login
                    </button>

                    <!-- copyright dz.codes -->
                     <div class="bottom-0 text-center mx-auto text-gray-500 p-4 fixed">Created by
                        <a class="text-blue-600" href="https://derisdev.my.id">Dz.codes</a>
                     </div>
                </div>
            </div>
            <!-- === content end === -->

            <!-- === FORM  === -->
            <div
                x-show="showCart"
                x-transition
                class="md:w-[30%] w-[100%] mx-auto bg-white rounded-t-[50px] p-4 fixed bottom-0 shadow-[0_-2px_6px_rgba(0,0,0,0.05),0_2px_6px_rgba(0,0,0,0.05)] p-4 bg-gray-50"
                id="form"
                class="bg-white w-full p-4 rounded-t-[50px] fixed bottom-0 left-0 shadow-[0_-2px_6px_rgba(0,0,0,0.05),0_2px_6px_rgba(0,0,0,0.05)] p-4 bg-gray-50"
            >
                <!-- garis  -->
                <div
                    class="bg-gray-400 w-[80px] h-[4px] rounded-lg mx-auto mb-4"
                ></div>

                <h1 class="text-center font-bold text-3xl">Login</h1>

                <form
                    class="flex flex-col text-start gap-2 mt-4"
                    action="{{ route('login.prosess') }}"
                    method="POST"
                >
                    @csrf

                    <label>Email</label>
                    <input
                        class="p-4 rounded-lg border"
                        type="email"
                        name="email"
                    />

                    <label>Password</label>
                    <input
                        class="p-4 rounded-lg border"
                        type="password"
                        name="password"
                    />

                    <div class="flex gap-4 mt-4">
                        <button
                            type="submit"
                            class="bg-[#1c2e57] flex-1 p-2 px-6 text-white rounded-[20px]"
                        >
                            Masuk
                        </button>

                        <button
                            type="button"
                            @click="showCart = false"
                            class="bg-gray-400 p-2 px-6 flex-1 text-white rounded-[20px]"
                        >
                            Tutup
                        </button>
                    </div>
                </form>
            </div>
            <!-- === form end === -->
        </div>

        </div>
        <!-- === mobile first end === -->

        <!-- Alpine JS -->
        <script
            defer
            src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
    </body>
</html>