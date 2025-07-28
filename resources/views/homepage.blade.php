<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog KAI</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>
    <!-- Navbar -->
    <nav class="absolute top-0 left-0 w-full z-10">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <span class="self-center text-xl font-semibold text-white">Blog KAI</span>
            </a>

            <!-- Navigation Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}"
                    class="text-sm font-medium text-white hover:underline underline-offset-5">Home</a>
                <a href="{{ url('/about') }}" class="text-sm font-medium text-white hover:underline underline-offset-5">About</a>
            </div>

            <!-- Search Box & Sign in/Sign out -->
            <div class="flex items-center space-x-3">
                <a href="login.php"
                    class="text-sm font-medium text-white bg-[#3674B5] px-4 py-2 rounded-xl hover:bg-[#254F7B] hover:text-white">
                    Sign in
                </a>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="relative bg-center bg-no-repeat bg-gray-700 bg-blend-multiply h-screen flex items-center pt-16"
        style="background-image: url('/img/image1.jpg')">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white lg:text-6xl">Setiap Rel
                Memiliki Cerita</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Dari lokomotif klasik hingga
                kereta modern, temukan sejarah, inovasi, dan kisah menarik seputar dunia perkeretaapian di sini</p>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-10 min-h-screen place-items-center">
        {{-- title blog --}}
        <h1 class="text-5xl font-extrabold text-center my-20">BLOG</h1>
        <!-- Filter dan Search -->
        <div class="my-10 w-full grid grid-cols-3 gap-4 items-center">
            <!-- Filter Buttons -->
            <div class="col-span-2 flex gap-5 w-full justify-between">
                <a href=""
                    class="flex-1 text-center text-md font-bold bg-[#3674B5] text-white py-2 rounded-xl hover:bg-[#254F7B] transition-all">
                    Kategori 1
                </a>
                <a href=""
                    class="flex-1 text-center text-md font-bold bg-[#3674B5] text-white py-2 rounded-xl hover:bg-[#254F7B] transition-all">
                    Kategori 2
                </a>
                <a href=""
                    class="flex-1 text-center text-md font-bold bg-[#3674B5] text-white py-2 rounded-xl hover:bg-[#254F7B] transition-all">
                    Kategori 3
                </a>
                <a href=""
                    class="flex-1 text-center text-md font-bold bg-[#3674B5] text-white py-2 rounded-xl hover:bg-[#254F7B] transition-all">
                    Kategori 4
                </a>
            </div>

            <!-- Search Bar -->
            <div class="relative col-span-1">
                <input type="text" placeholder="Search"
                    class="w-full py-2 px-6 pl-9 text-md text-gray-900 border border-gray-300 rounded-xl bg-white focus:outline-none">
                <svg class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
        </div>


        <!-- Grid Gambar -->
        <div class="grid grid-cols-3 gap-5 mx-auto mt-8">
            <div>
                <a href="">
                    <div class="relative w-fit overflow-hidden rounded-lg group">
                        <!-- Gambar -->
                        <img src="/img/image1.jpg" alt=""
                            class="w-full h-auto transition-transform duration-500 group-hover:scale-110">

                        <!-- Overlay hitam transparan -->
                        <div
                            class="absolute cursor-pointer inset-0 bg-gradient-to-b from-black/0 to-black/40 opacity-100 group-hover:opacity-0 transition-opacity duration-500">
                        </div>

                        <!-- Label kategori -->
                        <div
                            class="absolute cursor-text top-3 right-3 bg-[#3674B5] text-white text-sm font-bold px-3 py-1 rounded-lg">
                            Sejarah
                        </div>
                    </div>
                </a>
                <h1 class="text-2xl font-bold my-3">Lorem ipsum dolor sit amet consectetur.</h1>
                <div class="flex gap-4 mb-5 place-items-center">
                    <p class="text-sm font-medium flex gap-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Aldo Leo</p>
                    |
                    <p class="text-sm font-medium flex gap-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        28 Juli 2025</p>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-8 mt-20">
            <button disabled
                class="rounded-md border border-slate-300 p-2.5 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd"
                        d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <p class="text-slate-600">
                Page <strong class="text-slate-800">1</strong> of&nbsp;<strong class="text-slate-800">10</strong>
            </p>

            <button
                class="rounded-md border border-slate-300 p-2.5 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-[#3674B5] focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd"
                        d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </section>

    <footer class="bg-white shadow-sm mt-20 dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BlogKAI</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="{{ url('/') }}" class="text-sm font-medium text-white hover:underline underline-offset-5 me-4 md:me-6">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="text-sm font-medium text-white hover:underline underline-offset-5">About</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="https://flowbite.com/" class="hover:underline">BlogKAI</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>
</html>
