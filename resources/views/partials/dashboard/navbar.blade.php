<div class="w-full flex justify-center fixed bottom-0 sm-601:bottom-3">
    <div class="bg-zinc-100 w-full h-14 border-t border-zinc-200 flex justify-evenly overflow-hidden sm-601:w-[495px] sm-601:rounded-md sm-601:border">
        <a href="/" class="flex flex-col items-center justify-center px-3">
            <img src="{{ asset('img/home.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm">Home</p>
        </a>

        <a href="/dashboard/product" class="{{ (Request::is('dashboard/product') ? 'bg-zinc-200' : '') }} h-full flex flex-col items-center justify-center px-3">
            <img src="{{ asset('img/clothing.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm">Produk</p>
        </a>

        <a href="/dashboard/order" class="{{ (Request::is('dashboard/order') ? 'bg-zinc-200' : '') }}flex flex-col items-center justify-center px-3">
            <img src="{{ asset('img/bag-ds.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm">Pemesanan</p>
        </a>

        <a href="/dashboard/setting" class="{{ (Request::is('dashboard/setting') ? 'bg-zinc-200' : '') }} flex flex-col items-center justify-center px-3">
            <img src="{{ asset('img/user-settings.png') }}" alt="Home" class="w-[20px] mb-1">
            <p class="text-zinc-600 text-sm">Pengaturan</p>
        </a>
    </div>
</div>