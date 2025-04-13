<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terima Kasih</title>
  @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-green-100 to-white px-4">

  <div class="bg-white p-8 rounded-2xl shadow-xl max-w-md w-full text-center animate-fade-in">

    <div class="flex justify-center mb-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l2.25 2.25L15 9.75" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </div>

    <h1 class="text-3xl font-bold text-green-600 mb-2">Terima kasih! 🎉</h1>
    <p class="text-gray-600 mb-6 leading-relaxed">
      Donasimu telah kami terima. <br />
      Semoga kebaikanmu dibalas berkali-kali lipat! ❤️
    </p>

    <a href="/"
      class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2.5 rounded-xl transition duration-200 shadow-md hover:shadow-lg">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12l7.5-7.5M3 12h18" />
      </svg>
      Kembali
    </a>
  </div>

  <style>
    @keyframes fade-in {
      from {
        opacity: 0;
        transform: scale(0.95);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate-fade-in {
      animation: fade-in 0.4s ease-out forwards;
    }
  </style>

</body>
</html>
