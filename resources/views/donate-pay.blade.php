<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proses Donasi</title>
  @vite('resources/css/app.css')
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.clientKey') }}"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-blue-50 to-white px-4">

  <div class="text-center bg-white p-8 rounded-2xl shadow-xl w-full max-w-md animate-fade-in">
    <div class="flex justify-center mb-6">
      <div class="w-14 h-14 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"></div>
    </div>

    <h1 class="text-2xl font-bold text-gray-800 mb-2">Mengalihkan ke pembayaran...</h1>
    <p class="text-gray-600 text-sm mb-4">
      Harap tunggu sebentar, kamu akan segera diarahkan ke halaman pembayaran Midtrans.
    </p>

    <p class="text-xs text-gray-400">Jangan tutup atau muat ulang halaman ini.</p>
  </div>

  <style>
    @keyframes fade-in {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in {
      animation: fade-in 0.4s ease-out forwards;
    }
  </style>

  <script type="text/javascript">
    window.onload = function () {
      snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
          window.location.href = '/donation/thanks';
        },
        onPending: function(result){
          window.location.href = '/donation/thanks';
        },
        onError: function(result){
          alert("Gagal melakukan pembayaran. Silakan coba lagi.");
        },
      });
    };
  </script>
</body>
</html>
