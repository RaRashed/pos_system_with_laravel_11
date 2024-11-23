<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>@yield('title', 'Laravel')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <meta content="" name="description">
  <meta content="" name="keywords">

 @include('layouts.admin.css')
 @stack('styles')
</head>

<body>

 @include('layouts.admin.header')
 @include('layouts.admin.sidebar')

  <main id="main" class="main">
    @yield('content')

  </main><!-- End #main -->
  @include('layouts.admin.footer')
  @include('layouts.admin.js')
</body>
@include('layouts.admin.js')
@stack('scripts')

</html>

