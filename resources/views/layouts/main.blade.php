<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
  <livewire:styles>
</head>

<body class="font-sans bg-gray-900 text-white">
  <nav class="border-b border-gray-800">
    <div class="container mix-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
      <ul class="flex flex-col md:flex-row items-center">
        <li>
          <a href="{{ route('movies.index') }}">
            <svg class="w-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 290 130" fill="none">
              <circle cx="64" cy="64" r="64" fill="#4ab8a1" />
              <path d="M64 98c-18.748 0-34-15.252-34-34s15.252-34 34-34 34 15.252 34 34-15.252 34-34 34z" fill="#3f6073" />
              <circle cx="64" cy="64" r="30" fill="#2d4452" />
              <path d="M89 111a2 2 0 01-2-2c0-4.963 4.037-9 9-9h1c1.654 0 3-1.346 3-3s-1.346-3-3-3H64a2 2 0 010-4h33c3.859 0 7 3.141 7 7s-3.141 7-7 7h-1c-2.757 0-5 2.243-5 5a2 2 0 01-2 2z" fill="#2d4452" />
              <circle cx="64" cy="64" r="25" fill="#233540" />
              <path d="M64 19c-24.854 0-45 20.146-45 45s20.146 45 45 45 45-20.146 45-45-20.146-45-45-45zm13.436 17.423c3.904-3.905 10.236-3.905 14.143 0s3.904 10.237 0 14.144c-3.905 3.904-10.237 3.904-14.143 0-3.907-3.907-3.907-10.239 0-14.144zM25 64c0-5.521 4.479-10 10-10s10 4.479 10 10-4.479 10-10 10-10-4.479-10-10zm25.564 27.577c-3.904 3.905-10.236 3.905-14.143 0s-3.904-10.237 0-14.142c3.905-3.906 10.237-3.906 14.143 0 3.907 3.905 3.907 10.237 0 14.142zm0-41.013c-3.904 3.904-10.236 3.904-14.143 0-3.904-3.904-3.904-10.236 0-14.143 3.905-3.906 10.237-3.904 14.143 0 3.907 3.907 3.907 10.239 0 14.143zM64 103c-5.521 0-10-4.479-10-10s4.479-10 10-10 10 4.479 10 10-4.479 10-10 10zm0-58c-5.521 0-10-4.479-10-10s4.479-10 10-10 10 4.479 10 10-4.479 10-10 10zm27.577 46.577c-3.905 3.905-10.237 3.905-14.144 0-3.904-3.905-3.904-10.237 0-14.142 3.905-3.906 10.237-3.906 14.144 0 3.905 3.905 3.905 10.237 0 14.142zM93 74c-5.521 0-10-4.479-10-10s4.479-10 10-10 10 4.479 10 10-4.479 10-10 10z" fill="#f5f5f5" />
            </svg>
          </a>
        </li>
        <li class="md:ml-16 mt-3 md:mt-0">
          <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
        </li>
        @guest
        <li class="md:ml-6 mt-3 md:mt-0">
          <a href="{{ route('login') }}" class="hover:text-gray-300">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="md:ml-6 mt-3 md:mt-0">
          <a href="{{ route('register') }}" class="hover:text-gray-300">{{ __('Register') }}</a>
        </li>
        @endif 
        @else
        <li class="md:ml-6 mt-3 md:mt-0">
          <a href="{{ route('shares.activies') }}" class="hover:text-gray-300">{{ __('My Activities') }}</a>
        </li>
        @endguest</ul>
      <div class="flex flex-col md:flex-row items-center">
        <livewire:search-dropdown>
      </div>
    </div>
  </nav>
  @yield('content')
  <livewire:scripts>
</body>

</html>