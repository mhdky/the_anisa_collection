<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="Penjualan pakaian terlengkap, termurah dan terpercaya">
    <meta name="keywords" content="Clothing online store">
    <link rel="icon" type="image" href="{{ asset('img/logo-anisa-collection.svg') }}">

    {{-- open graph --}}
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="Penjualan pakaian terlengkap, termurah dan terpercaya">
    @if (!empty($product))
        @if (Request::is('product/' . $product->url))
            <meta property="og:image" content="{{ asset('storage/' . $product->image) }}">
        @else
            <meta property="og:image" content="{{ asset('img/logo-anisa-collection.svg') }}">
        @endif
    @else
        <meta property="og:image" content="{{ asset('img/logo-anisa-collection.svg') }}">
    @endif
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="Clothing online store">

    {{-- meta twitter --}}
    <meta name="twitter:card" content="product">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="Penjualan pakaian terlengkap, termurah dan terpercaya">
    @if (!empty($product))
        @if (Request::is('product/' . $product->url))
            <meta name="twitter:image" content="{{ asset('storage/' . $product->image) }}">
        @else
            <meta name="twitter:image" content="{{ asset('img/logo-anisa-collection.svg') }}">
        @endif
    @else
        <meta name="twitter:image" content="{{ asset('img/logo-anisa-collection.svg') }}">
    @endif

    <meta name="pinterest-rich-pin" content="true">

    <!-- Fonts roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- font playfire display --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- livewire --}}
    @stack('liveware-style')
</head>
<body>
    @yield('container')

    @stack('script')
    @stack('drop-down-js')
    @stack('quantity-counter')
    @stack('go-back')
    @stack('script-alert-ok')
    @stack('livewire-script')
    @stack('form-pay')
    @stack('preview-image')
    @stack('copy')
    @stack('unique')
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>