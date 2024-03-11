<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="images" />
        <meta name="description" content="Free website for photographers by Samar Mahfouz">
        <meta name="author" content="SamarMahfouz">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Website name |  @yield('title')</title>
        <link rel="stylesheet" href="front/css/all.min.css">
        <link rel="stylesheet" href="front/css/bootstrap.min.css">
        <link rel="stylesheet" href="front/css/style.css?v=1.0">
    </head>
    <body>
        @yield('main')
        
        <!-- Start Footer Section -->
        <footer class="text-center">
            <p>Copyright &copy; {{date('Y')}} | By <a href="https://samarmahfouz.com" class="text-decoration-none" target="_blank"> SAMAR MAHFOUZ</a>. All rights reserved.</p>
        </footer>
        <!-- End Footer Section -->
        <script src="front/js/jquery.js"></script>
        <script src="front/js/all.min.js"></script>
        <script src="front/js/bootstrap.min.js"></script>
        <script src="front/js/script.js"></script>
    </body>
</html>