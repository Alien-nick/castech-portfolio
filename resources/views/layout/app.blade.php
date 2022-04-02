<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,100&display=swap" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Castech</title>
        <link rel="stylesheet" href=" {{ asset('/css/app.css') }} ">
        <script>
          if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) &&
              window.matchMedia('(prefers-color-scheme: dark)').matches)
          ) {
            document.documentElement.classList.add('dark');
          } else {
            document.documentElement.classList.remove('dark');
          }
        </script>
    </head>
      <body class="antialiased text-gray-800 dark:text-gray-200">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
            <x-layout.navbar></x-layout.navbar>
              {{ $slot }}
            <x-layout.footer>Footer</x-layout.footer>
        </div>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script>
          var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
          var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

          // Change the icons inside the button based on previous settings
          if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
              themeToggleLightIcon.classList.remove('hidden');
          } else {
              themeToggleDarkIcon.classList.remove('hidden');
          }

          var themeToggleBtn = document.getElementById('theme-toggle');

          themeToggleBtn.addEventListener('click', function() {

              // toggle icons inside button
              themeToggleDarkIcon.classList.toggle('hidden');
              themeToggleLightIcon.classList.toggle('hidden');

              // if set via local storage previously
              if (localStorage.getItem('color-theme')) {
                  if (localStorage.getItem('color-theme') === 'light') {
                      document.documentElement.classList.add('dark');
                      localStorage.setItem('color-theme', 'dark');
                  } else {
                      document.documentElement.classList.remove('dark');
                      localStorage.setItem('color-theme', 'light');
                  }

              // if NOT set via local storage previously
              } else {
                  if (document.documentElement.classList.contains('dark')) {
                      document.documentElement.classList.remove('dark');
                      localStorage.setItem('color-theme', 'light');
                  } else {
                      document.documentElement.classList.add('dark');
                      localStorage.setItem('color-theme', 'dark');
                  }
              }
              
          });
        </script>
      </body>
</html>
