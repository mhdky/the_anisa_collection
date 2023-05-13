<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Fonts roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- font playfire display --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- nav mobile top --}}
    <div class="bg-white w-full py-4 px-3 flex justify-between items-center border-b border-zinc-200 fixed top-0 z-10 md-900:hidden">
        <a href="/" class="text-2xl text-yellow-primary font-playfair font-bold">Anisa Collection</a>
        
        {{-- search button --}}
        <div class="searchBtnAdm w-[22px] h-4 flex flex-col justify-between relative">
            <i class="fas fa-search text-black-primary text-lg"></i>
        </div>
    </div>

    <div class="bg-zinc-100 w-full h-16 fixed z-10 bottom-0 border-t border-zinc-200 flex justify-evenly items-center md-900:hidden">
        <a href="/" class="h-full flex flex-col justify-center items-center px-4">
            <img src="{{ asset('img/home.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm font-medium">Home</p>
        </a>

        <a href="/dashboard/product" class="{{ (Request::is('dashboard/product*') ? 'bg-zinc-200' : '') }} h-full flex flex-col justify-center items-center px-4">
            <img src="{{ asset('img/clothing.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm font-medium">Produk</p>
        </a>

        <a href="/dashboard/order" class="{{ (Request::is('dashboard/order') ? 'bg-zinc-200' : '') }} h-full flex flex-col justify-center items-center px-4 relative">
            @foreach ($orders as $order)
                @if ($order->nomor_resi === null)
                    <div class="bg-red-500 w-3 h-3 rounded-full absolute right-7 top-1"></div>
                @endif
            @endforeach
            
            <img src="{{ asset('img/bag-ds.png') }}" alt="Pemesanan" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm font-medium">Pemesanan</p>
        </a>

        <a href="/dashboard/setting" class="{{ (Request::is('dashboard/setting') ? 'bg-zinc-200' : '') }} h-full flex flex-col justify-center items-center px-4">
            <img src="{{ asset('img/user-settings.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm font-medium">Pengturan</p>
        </a>
    </div>

    {{-- search mobile --}}
    <div class="searchAdm bg-white w-full h-screen fixed z-20 hidden">
        <div class="w-full px-3">
            {{-- search mobile --}}
            <form method="GET" action="/dashboard/product" autocomplete="off" class="flex items-center mt-5">
                <div class="closeSearchMobileAdm mr-3"><i class="fas fa-arrow-left"></i></div>
                <input type="search" name="search" value="{{ request('search') }}" placeholder="Search product" oninput="FnSearchMobile()" class="inputSearchMobileAdm inputSearchMobile w-full flex-[2] rounded-[5px] bg-gray-100 border border-gray-300 outline-none focus:border-gray-300 focus:ring-0">
                <button type="submit" disabled class="btnSearchMobile"></button>
            </form>
        </div>
    </div>

    {{-- nav desktop --}}
    <div class="bg-white w-full h-16 pr-5 border-b border-zinc-200 fixed z-20 top-0 hidden justify-between md-900:flex">
        {{-- logo --}}
        <div class="w-[235px] px-4 flex items-center border-r border-zinc-200">
            <a href="/" class="text-[20px] text-yellow-primary font-bold font-playfair">ANISA COLLECTION</a>
        </div>

        <div class="w-full h-full pl-4 flex-[2] flex justify-between items-center">
            {{-- search desktop --}}
            <form method="GET" action="/dashboard/product" class="bg-zinc-100 w-60 h-8 rounded-[5px] flex items-center pl-3">
                <i class="fas fa-search text-zinc-600 text-[12px]"></i>
                <input type="search" name="search" id="" value="{{ request('search') }}" placeholder="Search product" oninput="FnSearchDesktop()" class="inputSearchDesktop bg-transparent w-full h-full outline-none border-none text-[13px] focus:ring-0 placeholder:text-gray-600">
                <button type="submit" disabled class="btnSearchDesktop"></button>
            </form>

            {{-- admin name --}}
            @auth
                <h2 class="text-zinc-600 text-sm font-medium">{{ Str::limit(Auth::user()->name, 20) }}</h2>
            @endauth
        </div>
    </div>

    {{-- list dan section --}}
    <div class="w-full flex">
        {{-- list desktop --}}
        <div class="bg-white w-[235px] h-screen hidden border-r border-zinc-200 sticky top-0 md-900:block">
            <div class="w-full mt-16">
                <ul class="mx-8 my-10 inline-block">
                    <li class="mb-5"><a href="/" class="text-zinc-600 text-sm hover:text-yellow-primary">Home</a></li>
                    <li class="mb-5"><a href="/dashboard/product" class="{{ (Request::is('dashboard/product*') ? 'text-yellow-primary' : 'text-zinc-600') }} text-sm hover:text-yellow-primary">Produk</a></li>
                    <li class="mb-5 relative">
                        <a href="/dashboard/order" class="{{ (Request::is('dashboard/order*') ? 'text-yellow-primary' : 'text-zinc-600') }} text-sm hover:text-yellow-primary">
                            Pemesanan
                        </a>

                        @foreach ($orders as $order)
                            @if ($order->nomor_resi === null)
                                <div class="bg-red-500 w-2 h-2 rounded-full absolute -left-2 top-1"></div>
                            @endif
                        @endforeach
                    </li>
                    <li class="mb-5"><a href="/dashboard/setting" class="{{ (Request::is('dashboard/setting*') ? 'text-yellow-primary' : 'text-zinc-600') }} text-sm hover:text-yellow-primary">Pengaturan</a></li>
                </ul>
            </div>
        </div>

        {{-- section --}}
        @yield('container')
    </div>
    @stack('unique')
    @stack('nav-admin')
    @stack('detail-card-product')
    @stack('trix-upload')
    @stack('preview-image')
    @stack('detail-order')
    @stack('script-alert-ok')
    @livewireScripts
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>