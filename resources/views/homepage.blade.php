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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
        <a href="{{ url('/') }}" class="text-sm font-medium text-white hover:underline underline-offset-5">Home</a>
        <a href="" class="text-sm font-medium text-white hover:underline underline-offset-5">About</a>
        <a href="" class="text-sm font-medium text-white hover:underline underline-offset-5">Contact</a>
      </div>

      <!-- Search Box & Sign in/Sign out -->
      <div class="flex items-center space-x-3">
          <a href="login.php" class=" flex gap-2 text-sm font-medium text-white bg-[#3674B5] px-4 py-2 rounded-xl hover:bg-[#254F7B] hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
            </svg>
            Sign in
          </a>
      </div>
    </div>
  </nav>

  <!-- Header Section -->
  <section class="relative bg-center bg-no-repeat bg-gray-700 bg-blend-multiply h-screen flex items-center pt-16" style="background-image: url('/img/image1.jpg')">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white lg:text-6xl">Setiap Rel Memiliki Cerita</h1>
      <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Dari lokomotif klasik hingga kereta modern, temukan sejarah, inovasi, dan kisah menarik seputar dunia perkeretaapian di sini</p>
    </div>
  </section>
</body>
</html>