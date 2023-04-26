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
    {{-- nav mobile --}}
    <div class="bg-white w-full py-4 px-3 flex justify-between items-center border-b border-zinc-200 fixed top-0 z-20">
        <a href="/" class="text-xl text-yellow-primary font-playfair font-bold">Anisa Collection</a>
        
        {{-- burger button --}}
        <div class="burgerBtnAdm w-[22px] h-4 flex flex-col justify-between relative">
            <span class="lineAdm bg-black-primary w-full h-[3px] rounded-sm"></span>
            <span class="lineAdm bg-black-primary w-full h-[3px] rounded-sm"></span>
            <span class="lineAdm bg-black-primary w-full h-[3px] rounded-sm"></span>
        </div>
    </div>

    <div class="listNavAdm bg-white w-full h-screen fixed z-10 -translate-y-full transition-all duration-300">
        <div class="w-full px-3">
            {{-- search mobile --}}
            <form action="#" autocomplete="off" class="mt-[90px]">
                <input type="search" name="search" value="{{ request('search') }}" placeholder="Search product" oninput="FnSearchMobile()" class="inputSearchMobile w-full rounded-[5px] bg-gray-100 border border-gray-300 outline-none focus:border-transparent focus:ring-yellow-primary focus:shadow-sm focus:shadow-yellow-primary">
                <button type="submit" disabled class="btnSearchMobile"></button>
            </form>
            {{-- list navigation --}}
            <ul class="font-bold">
                <li class="my-3"><a href="/" class="{{ (Request::is('/') ? 'text-yellow-primary' : 'text-gray-500') }}">Home</a></li>
                <li class="my-3"><a href="/product" class="{{ (Request::is('dashboard/product') ? 'text-yellow-primary' : 'text-gray-500') }}">Product</a></li>
                <li class="my-3"><a href="/howtoorder" class="{{ (Request::is('dashboard/order') ? 'text-yellow-primary' : 'text-gray-500') }}">Pemesanan</a></li>
                <li class="my-3"><a href="/aboutus" class="{{ (Request::is('dashboard/setting') ? 'text-yellow-primary' : 'text-gray-500') }}">Setting</a></li>
            </ul>
        </div>
    </div>

    @stack('livewire-script')
    @stack('unique')
    <script src="{{ asset('js/nav-admin.js') }}"></script>
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>