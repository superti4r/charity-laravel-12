<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Donasi Sekarang</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-100 to-white min-h-screen flex items-center justify-center px-4 flex-col">
  <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-lg animate-fade-in mb-8">
    <div class="flex flex-col items-center mb-6">
      <div class="bg-blue-100 text-blue-600 rounded-full p-3 mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
          </svg>
      </div>
      <h1 class="text-3xl font-bold text-blue-700 text-center">Donasi Sekarang</h1>
      <p class="text-gray-500 text-sm text-center mt-1">Dukung program sosial kami dengan donasi terbaikmu 🤝</p>
    </div>

    <form action="/donation/checkout" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
        <input name="name" type="text" required
          class="w-full mt-1 border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition" />
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input name="email" type="email" required
          class="w-full mt-1 border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition" />
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Jumlah Donasi (Rp)</label>
        <input name="amount" type="number" required min="1000"
          class="w-full mt-1 border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition" />
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Pesan</label>
        <textarea name="message" rows="3"
          class="w-full mt-1 border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition"></textarea>
      </div>
      <button type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-xl transition duration-200 ease-in-out shadow hover:shadow-md">
        Donasi Sekarang
      </button>
    </form>
  </div>

  <label class="block text-sm font-medium text-gray-700">
    &copy; 2025 made with ♥️ <a href="https://github.com/superti4r" class="text-blue-600 hover:underline">superti4r</a>.
  </label>


  <style>
    @keyframes fade-in {
      0% {
        opacity: 0;
        transform: scale(0.95);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate-fade-in {
      animation: fade-in 0.5s ease-out forwards;
    }
  </style>
</body>
</html>
