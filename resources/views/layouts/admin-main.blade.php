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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- livewire --}}
    @stack('liveware-style')
</head>
<body>
    {{-- nav mobile top --}}
    <div class="bg-white w-full py-4 px-3 flex justify-between items-center border-b border-zinc-200 fixed top-0 z-10">
        <a href="/" class="text-xl text-yellow-primary font-playfair font-bold">Anisa Collection</a>
        
        {{-- search button --}}
        <div class="searchBtnAdm w-[22px] h-4 flex flex-col justify-between relative">
            <i class="fas fa-search text-black-primary text-lg"></i>
        </div>
    </div>

    <div class="bg-zinc-100 w-full h-16 fixed bottom-0 border-t border-zinc-200 flex justify-evenly items-center">
        <a href="/" class="h-full flex flex-col justify-center items-center px-5">
            <img src="{{ asset('img/home.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm font-medium">Home</p>
        </a>

        <a href="/dashboard/product" class="{{ (Request::is('dashboard/product') ? 'bg-zinc-200' : '') }} h-full flex flex-col justify-center items-center px-5">
            <img src="{{ asset('img/clothing.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm font-medium">Produk</p>
        </a>

        <a href="/dashboard/order" class="{{ (Request::is('dashboard/order') ? 'bg-zinc-200' : '') }} h-full flex flex-col justify-center items-center px-5">
            <img src="{{ asset('img/bag-ds.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm font-medium">Pemesanan</p>
        </a>

        <a href="/dashboard/setting" class="{{ (Request::is('dashboard/setting') ? 'bg-zinc-200' : '') }} h-full flex flex-col justify-center items-center px-5">
            <img src="{{ asset('img/user-settings.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm font-medium">Pengturan</p>
        </a>
    </div>

    {{-- search mobile --}}
    <div class="searchAdm bg-white w-full h-screen fixed z-20 hidden">
        <div class="w-full px-3">
            {{-- search mobile --}}
            <form action="#" autocomplete="off" class="flex items-center mt-5">
                <div class="closeSearchMobileAdm mr-3"><i class="fas fa-arrow-left"></i></div>
                <input type="search" name="search" value="{{ request('search') }}" placeholder="Search product" oninput="FnSearchMobile()" class="inputSearchMobileAdm w-full flex-[2] rounded-[5px] bg-gray-100 border border-gray-300 outline-none focus:border-gray-300 focus:ring-0">
                <button type="submit" disabled class="btnSearchMobile"></button>
            </form>
        </div>
    </div>

    @stack('livewire-script')
    @stack('unique')
    <script src="{{ asset('js/nav-admin.js') }}"></script>
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>