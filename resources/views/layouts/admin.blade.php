<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="ُ">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
       
    <title>Website name |  @yield('title')</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">      
  </head>
  <body>
       @include('admin.includes.navbar')
       @yield('main')
      <footer class="text-center py-3">
      <span >All rights reserved &copy; {{date('Y')}} | By <a href="https://samarmahfouz.com" class="text-decoration-none" target="_blank"> Samar Mahfouz </a></span>
      </footer>
      <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
  </body>
</html>