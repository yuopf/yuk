<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>SkyPro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    @include('partials.header')

    <main class="main">
        @yield('content')
    </main>

    @guest
        @include('components.auth-modal')
    @endguest

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
<footer class="bg-dark text-light py-4 mt-5">
  <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div>
      &copy; {{ date('Y') }} SkyPro. Все права защищены.
    </div>
    <div class="d-flex gap-4 align-items-center">
      <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" class="text-light d-flex align-items-center gap-1">
        <i class="bi bi-youtube" style="font-size: 1.5rem;"></i> YouTube
      </a>
      <a href="https://telegram.org/" target="_blank" rel="noopener noreferrer" class="text-light d-flex align-items-center gap-1">
        <i class="bi bi-telegram" style="font-size: 1.5rem;"></i> Telegram
      </a>
      <a href="https://www.pornhub.com/" target="_blank" rel="noopener noreferrer" class="text-light d-flex align-items-center gap-1">
        <!-- Кастомная иконка Pornhub -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512" fill="currentColor">
          <rect width="150" height="150" x="50" y="181" fill="#FF7F27"/>
          <rect width="200" height="150" x="200" y="181" fill="#000"/>
          <text x="90" y="270" font-family="Arial, sans-serif" font-weight="bold" font-size="90" fill="#000">PH</text>
        </svg>
        <span style="font-weight: bold; font-size: 1rem;">Pornhub</span>
      </a>
    </div>
  </div>
</footer>

</html>
