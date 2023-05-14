    {{-- nav mobile --}}
    <nav class="bg-white fixed z-40 top-0 w-full flex justify-between items-center px-5 py-4 border-b border-gray-300 md-768:hidden">
        {{-- burger button --}}
        <div class="burger-button w-5 h-4 flex flex-col justify-between relative">
            <span class="line w-full h-[3px] rounded-md bg-black-primary block"></span>
            <span class="line w-full h-[3px] rounded-md bg-black-primary block"></span>
            <span class="line w-full h-[3px] rounded-md bg-black-primary block"></span>
        </div>
        {{-- logo --}}
        <a href="/" class="text-yellow-primary text-2xl font-playfair font-bold">Anisa Collection</a>
        {{-- bag atau sign in --}}
        @auth
            {{-- bag --}}
            <a href="/bag" class="relative">
                <img src="{{ asset('img/bag.png') }}" alt="Bag" class="w-[22px]">
                @if ($bag->count() > 0 && $bag->count() < 10)
                    <div class="bg-red-500 w-4 h-4 rounded-full absolute bottom-4 left-4 flex justify-center items-center text-white text-[0.6rem] font-bold">{{ $bag->count() }}</div>
                @elseif($bag->count() >= 10)
                    <div class="bg-red-500 w-4 h-4 rounded-full absolute bottom-4 left-4 flex justify-center items-center text-white text-[0.6rem] font-bold">{{ '9+' }}</div>
                @endif
            </a>
        @else
            {{-- sign in --}}
            <a href="/login" class="text-[0.9rem] font-medium">Login</a>
        @endauth
    </nav>

    {{-- list navigation mobile --}}
    <div class="list-mobile bg-white fixed z-20 top-0 right-0 left-0 bottom-0 -translate-y-full px-5 transition-all duration-300 md-768:hidden">
        {{-- search mobile --}}
        <form action="/product" autocomplete="off" class="mt-[90px]">
            <input type="search" name="search" value="{{ request('search') }}" placeholder="Masukan kata kunci pencarian" oninput="FnSearchMobile()" class="inputSearchMobile w-full rounded-[5px] bg-gray-100 border border-gray-300 outline-none focus:border-transparent focus:ring-yellow-primary focus:shadow-sm focus:shadow-yellow-primary">
            <button type="submit" disabled class="btnSearchMobile"></button>
        </form>
        {{-- list navigation --}}
        <ul class="mt-5 font-bold">
            <li class="my-3"><a href="/" class="{{ (Request::is('/') ? 'text-yellow-primary' : 'text-gray-500') }}">Home</a></li>
            <li class="my-3"><a href="/product" class="{{ (Request::is('product*') || Request::is('collection*') ? 'text-yellow-primary' : 'text-gray-500') }}">Product</a></li>
            <li class="my-3"><a href="/howtoorder" class="{{ (Request::is('howtoorder') ? 'text-yellow-primary' : 'text-gray-500') }}">How To Order</a></li>
            <li class="my-3"><a href="/aboutus" class="{{ (Request::is('aboutus') ? 'text-yellow-primary' : 'text-gray-500') }}">About Us</a></li>
        </ul>
        {{-- nama pengguna, my profile dan sign out mobile  --}}
        @auth
            <div class="w-full border-t border-gray-300 mt-5">
                {{-- nama pengguna mobile --}}
                <h1 class="text-yellow-primary text-xl font-bold mt-3">{{ Str::limit(Str::title(Auth::user()->name), 25) }}</h1>
                {{-- my profile mobile --}}
                <a href="/account" class="text-gray-500 font-bold mt-3 block">My Account</a>
                <a href="/order" class="text-gray-500 font-bold mt-3 pb-3 flex">
                    <p>My Order</p>
                    @foreach ($the_orders as $the_order)
                        @if ($the_order->status_pembayaran == 0 )
                            <div class="bg-red-500 w-3 h-3 rounded-full"></div>
                        @endif
                    @endforeach
                </a>
                @can('admin')
                    <a href="/dashboard/product" class="text-gray-500 font-bold mt-3 mb-5 block">Admin Dashboard</a>
                @endcan
                {{-- sign out mobile --}}
                <form method="POST" action="{{ route('logout') }}" class="border-t border-gray-300">
                    @csrf
                    <button type="submit" class="text-red-500 font-semibold mt-3">Logout</button>
                </form>
            </div>
        @endauth
    </div>

    {{-- navigation desktop --}}
    <div class="bg-white hidden justify-center {{ (Request::is('/') ? '' : 'border-b border-gray-200') }} md-768:flex">
        <div class="w-full py-4 px-5 flex justify-between items-center lg-1100:w-[1100px]">
            {{-- logo dan list navigation desktop --}}
            <div class="flex items-center">
                {{-- logo desktop --}}
                <a href="/" class="text-yellow-primary text-2xl font-playfair font-bold md-950:text-3xl">Anisa Collection</a>
                {{-- list navigation desktop --}}
                <ul class="flex ml-5 mt-1 md-950:ml-9">
                    <li class="search-desktop mr-3 relative">
                        {{-- search desktop --}}
                        <i class="icon-search fas fa-search text-[0.75rem] cursor-pointer hover:text-yellow-primary"></i>
                        <form action="/product" method="get" autocomplete="off" class="form-search-desktop hidden">
                            <div class="bg-yellow-primary w-72 h-10 absolute z-30 top-8 -left-5 rounded-md shadow-md">
                                <div class="relative w-full h-full p-[3px] flex items-center">
                                    <i class="fas fa-sort-up text-yellow-primary absolute -top-[5px] left-[22px]"></i>
                                    <input type="search" name="search" value="{{ request('search') }}" placeholder="Masukan keyword pencarian" oninput="FnSearchDesktop()" id="input-search" class="inputSearchDesktop bg-white text-sm w-full h-full rounded-l-[3px] border border-white outline-none focus:ring-transparent focus:border-transparent">
                                    <button type="submit" disabled class="btnSearchDesktop bg-yellow-primary h-full rounded-r-[3px] px-4"><i class="fas fa-search text-white text-sm"></i></button>
                                </div>
                            </div>
                        </form>
                    </li>
                    {{-- list navigation desktop --}}
                    <li class="mr-3"><a href="/" class="{{ (Request::is('/') ? 'text-yellow-primary' : '') }} text-[0.9rem] hover:text-yellow-primary md-950:text-sm">Home</a></li>
                    <li class="mr-3"><a href="/product" class="{{ (Request::is('product*') || Request::is('collection*') ? 'text-yellow-primary' : '') }} text-[0.9rem] hover:text-yellow-primary md-950:text-sm">Product</a></li>
                    <li class="mr-3"><a href="/howtoorder" class="{{ (Request::is('howtoorder*') ? 'text-yellow-primary' : '') }} text-[0.9rem] hover:text-yellow-primary md-950:text-sm">How to order</a></li>
                    <li class="mr-3"><a href="/aboutus" class="{{ (Request::is('aboutus') ? 'text-yellow-primary' : '') }} text-[0.9rem] hover:text-yellow-primary md-950:text-sm">About us</a></li>
                </ul>
            </div>
            {{-- bag dan nama pengguna --}}
            @auth
                <div class="flex items-center">
                    {{-- bag --}}
                    <div class="relative">
                        <a href="/bag"><img src="{{ asset('img/bag.png') }}" alt="Bag" class="w-5"></a>
                        {{-- jumlah isi bag --}}
                        @if ($bag->count() > 0 && $bag->count() < 10)
                            <div class="bg-red-500 w-4 h-4 rounded-full absolute bottom-3 left-3 flex justify-center items-center text-white text-[0.7rem] font-bold">{{ $bag->count() }}</div>
                        @elseif($bag->count() >= 10)
                            <div class="bg-red-500 w-4 h-4 rounded-full absolute bottom-3 left-3 flex justify-center items-center text-white text-[0.7rem] font-bold">{{ '9+' }}</div>
                        @endif
                    </div>

                    {{-- nama pengguna --}}
                    <div class="nama-pengguna bg-black-primary w-32 ml-5 py-[5px] px-2 flex justify-between items-center rounded-md relative cursor-pointer md-950:py-2">
                        <p class="text-white text-[0.8rem]">{{ Str::limit(Str::title(Auth::user()->name), 12) }}</p>
                        <i class="arrow-down fas fa-chevron-down text-white text-[0.7rem] duration-300"></i>

                        {{-- profil dan logout --}}
                        <div class="profile-logout {{ (Request::is('/') ? 'bg-black-primary' : 'bg-black-primary') }} hidden w-32 absolute z-40 top-12 left-[1px] rounded-md shadow-md shadow-zinc-900">
                            <div class="relative w-full h-full">
                                <i class="upicon fas fa-sort-up absolute -top-[5px] left-1/2 -translate-x-1/2 {{ (Request::is('/') ? 'text-black-primary' : 'text-black-primary') }}"></i>
                                {{-- profile --}}
                                <a href="/account" class="myprofile w-full h-10 rounded-t-md px-2 flex items-center {{ (Request::is('/') ? 'hover:bg-white-hover' : 'hover:bg-black-hover') }}">
                                    <i class="fas fa-user text-white text-[0.9rem] mr-2"></i>
                                    <p class="text-white text-[0.8rem]">My Account</p>
                                </a>
                                {{-- order --}}
                                <a href="/order" class="myprofile w-full h-10 px-2 flex items-center relative {{ (Request::is('/') ? 'hover:bg-white-hover' : 'hover:bg-black-hover') }}">
                                    @foreach ($the_orders as $the_order)
                                        @if ($the_order->status_pembayaran == 0 )
                                            <div class="bg-red-500 w-2 h-2 rounded-full absolute right-9 top-3"></div>
                                        @endif
                                    @endforeach
                                    <img src="{{ asset('img/bag_order.png') }}" alt="Bag" class="w-5 -ml-1 mr-[6px]">
                                    <p class="text-white text-[0.8rem]">My order</p>
                                </a>
                                {{-- admin dashboard --}}
                                @can('admin')
                                    <a href="/dashboard/product" class="w-full h-10 px-2 flex items-center {{ (Request::is('/') ? 'hover:bg-white-hover' : 'hover:bg-black-hover') }}">
                                        <i class="fas fa-tachometer-alt text-white text-[0.9rem] mr-2"></i>
                                        <p class="text-white text-[0.8rem]">Admin Dash...</p>
                                    </a>
                                @endcan
                                {{-- sign out --}}
                                <form method="POST" action="{{ route('logout') }}" class="w-full h-10 rounded-b-md {{ (Request::is('/') ? 'hover:bg-white-hover' : 'hover:bg-black-hover') }}">
                                    @csrf
                                    <button type="submit" class="w-full h-full rounded-b-md flex items-center px-2">
                                        <i class="fas fa-sign-out-alt text-white text-[0.9rem] mr-2"></i>
                                        <p class="text-white text-[0.8rem]">Logout</p>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- close profil dan logout --}}
                    <div class="close-profile-logout hidden fixed z-30 top-0 right-0 bottom-0 left-0"></div>
                </div>
            @else
                <div class="flex items-center">
                    <a href="/login" class="text-[0.9rem] mr-3">Login</a>
                    <a href="/register" class="bg-black-primary px-2 py-1 text-white text-[0.9rem] rounded-md hover:bg-black-hover md-950:px-3 md-950:py-2">Register</a>
                </div>
            @endauth
        </div>
    </div>    

    {{-- close form search --}}
    <div class="close-form-search fixed z-[19] top-0 right-0 bottom-0 left-0 hidden"></div>

    {{-- whatsapp custumer services --}}
    <div class="fixed flex bottom-5 left-5">
        <div class="whatsapp bg-black-primary w-12 h-12 rounded-full flex justify-center items-center border border-green-600 shadow-md shadow-green-900 md-830:cursor-pointer" onclick="window.location='https:{{ '/'.'/' }}wa.me/{{ $storeInformation->phone_number }}/?text=Hallo, apakah produk masih tersedia?'">
            <i class="fab fa-whatsapp text-green-600 text-2xl"></i>
        </div>

        <div class="whatsapp-cs bg-black-primary h-max mt-1 ml-3 p-2 hidden border border-gray-300 rounded-[5px] relative opacity-0 md-830:opacity-100">
            <p class="text-white text-[0.8rem]">Custumer service</p>

            <i class="fas fa-caret-left text-xl absolute bottom-2 -left-[6px]"></i>
        </div>
    </div>

    {{-- back to top --}}
    <div class="back-top bg-black-primary w-10 h-10 hidden justify-center items-center rounded-[5px] fixed right-5 bottom-5 border border-gray-400 hover:bg-black-hover md-830:cursor-pointer" onclick="topFunction()">
        <i class="fas fa-angle-up text-white"></i>
    </div>

    @auth
        @push('drop-down-js')
            <script src="{{ asset('js/drop-down.js') }}"></script>
        @endpush
    @endauth