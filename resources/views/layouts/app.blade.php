<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
      
        @livewireStyles
        <title>Upwork</title>
    </head>
    <body>
      <div class="container mx-auto">
        @include('partials.navbar')
         @yield('content')
      </div>
     
      @livewireScripts
    </body>
</html>