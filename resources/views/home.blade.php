@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    {{-- jumbotron --}}
    <div class="bg-black-primary w-full h-[55vw] mt-[65px] flex items-center relative overflow-hidden md-768:w-[95vw] md-768:mx-auto md-768:mt-2 md-768:rounded-xl md-768:h-[47vw] md-930:w-[96vw] md-930:h-[44vw] lg-1100:w-[1060px] lg-1100:h-[480px]">
        {{-- tulisan sebaleh kiri --}}
        <div class="h-full absolute z-10 pl-5 flex flex-col justify-center md-930:pl-14">
            <h1 class="text-white text-[7vw] font-playfair font-bold md-768:text-[6vw] md-930:uppercase md-930:text-[5vw] lg-1100:text-[54px]">Anisa Collection</h1>
            <h2 class="text-yellow-primary text-[6vw] font-playfair font-bold mt-1 mb-2 sm-601:mb-4 md-768:text-[4vw] lg-1100:text-[44px]">Live For Fashion</h2>
            {{-- shop now --}}
            <a href="/product" class="relative w-[15vw] h-[7vw] sm-601:h-[6vw] md-768:h-[5vw] md-930:w-[10vw] md-930:h-[4vw] lg-1100:w-28 lg-1100:h-10">
                <p class="bg-white w-full h-full text-[2.8vw] font-playfair font-bold rounded-[4px] flex justify-center items-center absolute z-10 cursor-default active:top-[2.3px] active:left-[2.3px] sm-601:active:top-[4px] sm-601:active:left-[4px] md-768:text-lg md-930:text-base md-930:cursor-pointer">Shop now</p>
                <div class="w-full h-full border border-white rounded-[4px] absolute top-[2.3px] left-[2.3px] sm-601:top-[4px] sm-601:left-[4px]"></div>
            </a>
        </div>
        {{-- image --}}
        <div class="w-[75vw] absolute right-0 bottom-0 sm-601:w-[80vw] sm-601:-right-[10vw] sm-645:w-[75vw] sm-645:right-0 md-768:w-[60vw] md-930:w-[57vw] lg-1100:w-[615px]">
            <img src="{{ asset('img/jumbotron_image-2.png') }}" alt="Jumbotron Image" class="sm-645:w-full">
        </div>
    </div>

    {{-- collection --}}
    <div class="bg-yellow-primary w-full pt-4 pb-5 md-768:bg-white md-768:pb-0 md-768:pt-0 md-768:mt-3 lg-1100:w-[1100px] lg-1100:mx-auto">
        <h1 class="w-max mx-auto mb-3 text-[5vw] text-white font-playfair font-semibold md-768:hidden">Category Collection</h1>
        <div class="w-full flex px-5">
            {{-- men collection --}}
            <div class="w-1/2 mr-2 rounded-md overflow-hidden object-cover md-768:mr-3 md-768:rounded-[10px]"><a href="/collection/men"><img src="{{ asset('img/men_collection.png') }}" alt="Men Collection" class="w-full hover:opacity-90 cursor-default md-930:cursor-pointer"></a></div>
            {{-- women collection --}}
            <div class="w-1/2 rounded-md overflow-hidden object-cover md-768:rounded-[10px]"><a href="/collection/women"><img src="{{ asset('img/women_collection.png') }}" alt="Women Collection" class="w-full hover:opacity-90 cursor-default md-930:cursor-pointer"></a></div>
        </div>
    </div>

    {{-- name section dan card product --}}
    <div class="w-full mt-7 lg-1100:w-[1100px] lg-1100:mx-auto md-768:mt-11">
        {{-- name section card product --}}
        <div class="flex justify-between items-center px-5">
            <h1 class="text-lg font-playfair font-bold md-768:text-2xl">New Collection</h1>
            <a href="/product" class="text-yellow-primary text-sm font-bold md-768:text-lg">See more</a>
        </div>

        {{-- card product --}}
        <div class="flex flex-wrap justify-center mt-3">
            @foreach ($products as $product)
                <div class="{{ ($loop->index === 3) ? 'sm-500:hidden md-890:block' : '' }} bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('img/' . $product->image) }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. {{ number_format($product->price,0,'','.') }}</p>

                    {{-- nama product --}}
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] sm-360:hidden sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit(Str::title($product->name), 15) }}</h1>
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] hidden sm-360:block sm-440:hidden sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit(Str::title($product->name), 17) }}</h1>
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] hidden sm-440:block sm-500:hidden sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit(Str::title($product->name), 23) }}</h1>
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] hidden sm-500:block sm-570:hidden sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit(Str::title($product->name), 15) }}</h1>
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] hidden sm-570:block sm-645:hidden sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit(Str::title($product->name), 18) }}</h1>
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] hidden sm-645:block md-830:hidden sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit(Str::title($product->name), 22) }}</h1>
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] hidden md-830:block md-890:hidden sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit(Str::title($product->name), 25) }}</h1>
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] hidden md-890:block md-1000:hidden sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit(Str::title($product->name), 20) }}</h1>
                    <h1 class="text-white text-[0.8rem] font-bold mt-[1px] hidden md-1000:block sm-375:text-[0.9rem] sm-740:text-[1rem] sm-740:mt-2">{{ Str::limit(Str::title($product->name), 22) }}</h1>

                    {{-- button order --}}
                    <a href="/product/{{ $product->url }}" class="bg-slate-primary w-full mt-1 py-1 text-white text-[0.7rem] text-center font-bold rounded-[7px] block hover:bg-white-hover sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-3 lg-1100:py-2">Shop now</a>
                </div>
            @endforeach

            {{-- manipulate --}}
            <div class="w-[42.5vw] h-[1px] m-1 sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3"></div>
            <div class="w-[42.5vw] h-[1px] m-1 sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3"></div>
            <div class="w-[42.5vw] h-[1px] m-1 sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3"></div>
        </div>
    </div>

    {{-- anisa collection services --}}
    <div class="w-full flex flex-wrap px-5 sm-640:justify-between sm-640:px-4 sm-740:px-3 md-768:px-4 lg-1100:w-[1100px] lg-1100:mx-auto">
        {{-- name section anisa collection services  --}}
        <h1 class="w-full text-xl font-playfair font-bold mt-2 mb-5 sm-640:mx-1 sm-740:mx-3 md-768:text-2xl md-768:mx-2">Anisa Collection Services</h1>
        
        {{-- pengiriman --}}
        <div class="bg-gradient-to-br from-black-primary to-[#3A3A3A] w-full h-[70vw] mb-3 px-2 py-6 rounded-[10px] flex flex-col justify-evenly items-center sm-366:px-9 sm-423:px-16 sm-479:px-28 sm-479:py-16 sm-570:px-36 sm-570:py-24 sm-640:w-[30.3vw] sm-640:h-[30.3vw] sm-640:mx-1 sm-640:px-6 sm-640:py-3 sm-679:h-[26vw] sm-679:px-1 sm-679:py-3 sm-740:mx-2 sm-740:w-[30vw] sm-740:h-[23vw] md-768:w-[30.1vw] md-768:mx-1 md-830:w-[30.5vw] md-890:w-[30.6vw] md-950:px-5 md-950:py-8 md-1000:px-8 md-1000:w-[30.9vw] lg-1100:w-[343px] lg-1100:h-[300px] lg-1100:py-5 lg-1130:w-[335px] lg-1130:h-[280px]">
            {{-- icon --}}
            <div class="bg-slate-primary w-[58px] h-[58px] rounded-full flex justify-center items-center sm-640:w-[45px] sm-640:h-[45px] lg-1100:w-[60px] lg-1100:h-[60px]">
                <img src="{{ asset('img/truck.svg') }}" alt="Truck" class="w-9 sm-640:w-7 lg-1100:w-9">
            </div>

            {{-- service name --}}
            <h1 class="text-white text-xl font-bold sm-640:text-lg sm-740:text-base lg-1100:text-xl">Pengiriman</h1>

            {{-- keterangan service --}}
            <p class="text-gray-primary text-lg text-center sm-640:text-base sm-740:text-sm lg-1100:text-lg">Pengiriman terluas dengan menggunakan JNE</p>
        </div>

        {{-- custumer service --}}
        <div class="bg-gradient-to-br from-black-primary to-[#3A3A3A] w-full h-[70vw] mb-3 px-2 py-6 rounded-[10px] flex flex-col justify-evenly items-center sm-366:px-9 sm-423:px-16 sm-479:px-28 sm-479:py-16 sm-570:px-36 sm-570:py-24 sm-640:w-[30.3vw] sm-640:h-[30.3vw] sm-640:mx-1 sm-640:px-6 sm-640:py-3 sm-679:h-[26vw] sm-679:px-1 sm-679:py-3 sm-740:mx-2 sm-740:w-[30vw] sm-740:h-[23vw] sm-740:px-3 md-768:w-[30.1vw] md-768:mx-1 md-786:px-4 md-830:w-[30.5vw] md-890:w-[30.6vw] md-950:px-12 md-950:py-8 md-1000:px-14 md-1000:w-[30.9vw] lg-1100:w-[343px] lg-1100:h-[300px] lg-1100:px-10 lg-1100:py-5 lg-1130:w-[335px] lg-1130:h-[280px]">
            {{-- icon --}}
            <div class="bg-slate-primary w-[58px] h-[58px] rounded-full flex justify-center items-center sm-640:w-[45px] sm-640:h-[45px] lg-1100:w-[60px] lg-1100:h-[60px]">
                <i class="fab fa-whatsapp text-white text-3xl sm-640:text-2xl lg-1100:text-3xl"></i>
            </div>

            {{-- service name --}}
            <h1 class="text-white text-xl font-bold sm-640:text-lg sm-740:text-base lg-1100:text-lg">Custumer Service</h1>

            {{-- keterangan service --}}
            <p class="text-gray-primary text-lg text-center sm-640:text-base sm-740:text-sm lg-1100:text-lg">Custumer service yang ramah dan responsive</p>
        </div>

        {{-- pembayaran --}}
        <div class="bg-gradient-to-br from-black-primary to-[#3A3A3A] w-full h-[70vw] mb-3 px-2 py-6 rounded-[10px] flex flex-col justify-evenly items-center sm-366:px-9 sm-423:px-16 sm-479:px-28 sm-479:py-16 sm-570:px-36 sm-570:py-24 sm-640:w-[30.3vw] sm-640:h-[30.3vw] sm-640:mx-1 sm-640:px-6 sm-640:py-3 sm-653:px-7 sm-679:h-[26vw] sm-679:py-3 sm-740:mx-2 sm-740:w-[30vw] sm-740:h-[23vw] md-768:w-[30.1vw] md-768:mx-1 md-830:w-[30.5vw] md-890:w-[30.6vw] md-950:px-14 md-950:py-8 md-1000:px-16 md-1000:w-[30.9vw] lg-1100:w-[343px] lg-1100:h-[300px] lg-1100:py-5 lg-1130:w-[335px] lg-1130:h-[280px]">
            {{-- icon --}}
            <div class="bg-slate-primary w-[58px] h-[58px] rounded-full flex justify-center items-center sm-640:w-[45px] sm-640:h-[45px] lg-1100:w-[60px] lg-1100:h-[60px]">
                <p class="text-white text-[22px] font-bold sm-640:text-[18px] lg-1100:text-[22px]">Rp</p>
            </div>

            {{-- service name --}}
            <h1 class="text-white text-xl font-bold sm-640:text-lg sm-740:text-base lg-1100:text-lg">Pembayaran</h1>

            {{-- keterangan service --}}
            <p class="text-gray-primary text-lg text-center sm-640:text-base sm-740:text-sm lg-1100:text-lg">Pembayaran bisa melalui transfer bank</p>
        </div>
    </div>

    {{-- anisa collection maps --}}
    <div class="mt-5 px-5 lg-1100:w-[1100px] lg-1100:mx-auto lg-1100:mt-7">
        {{-- name section --}}
        <h1 class="text-xl font-playfair font-bold md-768:text-2xl">Temukan Anisa Collection</h1>

        {{-- maps dan detail alamat --}}
        <div class="flex flex-col mt-5">
            {{-- maps --}}
            <div class="w-full rounded-[10px] border border-slate-300">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.759456738868!2d100.26267335788451!3d1.9453145803107008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302d23215fe18109%3A0xc4eba75561ec585e!2sAnisa%20Collection!5e0!3m2!1sen!2sid!4v1670292959538!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-[70vw] rounded-[10px] md-830:h-96"></iframe>
            </div>

            {{-- detail alamat --}}
            <div class="mt-3">
                {{-- icon alamat --}}
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt text-xl text-yellow-primary mr-3"></i>
                    <p class="text-yellow-primary text-lg font-bold">Lokasi</p>
                </div>
                {{-- detail --}}
                <p class="mt-2">Jl. Sidodadi Dusun 3 Kec. Kampung Rakyat, Labuhan Batu Selatan</p>

                {{-- icon telepon --}}
                <div class="flex items-center mt-5">
                    <i class="fas fa-phone-alt text-xl text-yellow-primary mr-3"></i>
                    <p class="text-yellow-primary text-lg font-bold">Telepon / Whatsapp</p>
                </div>
                {{-- detail --}}
                <p class="mt-2">+6282246924258</p>
            </div>
        </div>
    </div>

    
    @include('partials.footer')
@endsection

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush