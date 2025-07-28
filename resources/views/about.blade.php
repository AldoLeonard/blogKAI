<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog KAI About</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <nav class="absolute top-0 left-0 w-full z-10">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <span class="self-center text-xl font-semibold text-black">Blog KAI</span>
            </a>

            <!-- Navigation Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}"
                    class="text-sm font-medium text-black hover:underline underline-offset-5">Home</a>
                <a href="{{ url('/about') }}" class="text-sm font-medium text-black hover:underline underline-offset-5">About</a>
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
    <section class="max-w-4xl mx-auto my-45 p-6">
        <h1 class="text-3xl font-bold mb-4">About This Blog</h1>
        <p class="text-lg text-gray-700 mb-4">
            Website ini adalah platform blog sederhana yang dibangun menggunakan Laravel. 
            Tujuan utama dari blog ini adalah untuk menyajikan artikel, berita, dan informasi menarik dalam tampilan yang 
            bersih, modern, dan responsif.
        </p>
        <p class="text-lg text-gray-700 mb-4">
            Semua konten yang tersedia di website ini dikelola secara dinamis melalui dashboard admin, 
            sehingga pembaruan artikel dapat dilakukan dengan mudah. 
            Fitur yang tersedia meliputi kategori, filter artikel, pencarian, pagination, dan sistem manajemen konten.
        </p>
        <p class="text-lg text-gray-700">
            Blog ini dibuat sebagai bagian dari proyek pengembangan web untuk melatih penerapan Laravel, 
            Tailwind CSS, serta integrasi fitur yang mendukung pengalaman pengguna yang optimal.
        </p>
    </section>

    <footer class="bg-white dark:bg-gray-900">
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