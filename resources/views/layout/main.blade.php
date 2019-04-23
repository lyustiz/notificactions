<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Meta -->
     @include('layout.meta')

     <!-- Links -->
     <link href="{{ mix('css/main.css') }}" rel="stylesheet">


     <!-- Title -->
     <title>{{ config('app.name') }}</title>

</head>

<body>

     @yield('content')
     
     @stack('beforeScripts')
          <script src="{{ mix('js/app.js') }}"></script>
     @stack('afterScripts')

</body>
</html>