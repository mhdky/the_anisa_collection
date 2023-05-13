<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if (Request::is('login'))
            <title>Login | Anisa Collection</title>
        @elseif(Request::is('forgot-password'))
            <title>Forgot Password | Anisa Collection</title>
        @elseif(Request::is('register'))
            <title>Register | Anisa Collection</title>
        @elseif(Request::is('reset-password*'))
            <title>Reset Password | Anisa Collection</title>
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
    </body>
</html>
