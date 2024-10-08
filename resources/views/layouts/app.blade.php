
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', '')</title>    

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('assets/css/sign-in.css') }}" rel="stylesheet">
    </head>
    <body class="d-flex align-items-center py-4 bg-body-tertiary">

        <main class="form-signin w-100 m-auto">
            @yield('content')
        </main>

        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
