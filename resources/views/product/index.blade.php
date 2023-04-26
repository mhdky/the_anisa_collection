@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    {{-- name section dan card product --}}
    <div class="w-full mt-20 lg-1100:w-[1100px] lg-1100:mx-auto md-768:mt-11">
        {{-- name section card product --}}
        <div class="flex justify-between items-center px-5">                
            @if (Request::is('product'))
                <h1 class="text-lg {{ (request('search') ? '' : 'font-playfair' ) }} font-bold md-768:text-2xl">{{ (request('search') ? Str::limit(Str::title( '"' . request('search') .'"' ), 20) : 'All Collection') }}</h1>
            @elseif(Request::is('collection/men'))
                <h1 class="text-lg font-playfair font-bold md-768:text-2xl">Men Collection</h1>
            @elseif(Request::is('collection/women'))
                <h1 class="text-lg font-playfair font-bold md-768:text-2xl">Women Collection</h1>
            @endif
        </div>

        {{-- card product --}}
        <div class="flex flex-wrap justify-center mt-3">
            @foreach ($products as $product)
                <div class="bg-black-primary w-[42.5vw] m-1 p-2 rounded-[10px] sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-640:p-3 sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3">
                    {{-- image card --}}
                    <div class="w-full h-[40vw] rounded-[10px] overflow-hidden sm-350:h-[41vw] sm-400:h-[42.5vw] sm-440:h-[43.5vw] sm-500:h-[30vw] md-890:h-[22vw] lg-1100:h-[260px] lg-1130:h-[240px]">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product" class="w-full h-full object-cover">
                    </div>

                    {{-- harga --}}
                    <p class="text-yellow-primary text-[0.7rem] font-bold mt-1 sm-375:text-[0.8rem] sm-740:text-[0.9rem] sm-740:mt-2">Rp. {{ number_format($product->price, 0, '', '.') }}</p>

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

            @if ($products->count() < 1)
                <div class="w-full h-screen flex flex-col items-center py-40">
                    <div class="h-max flex items-center">
                        <img src="{{ asset('img/search.png') }}" alt="Searching Icon" class="w-10 h-max mr-3">
                        <p class="text-gray-400 font-bold">Product could not be found</p>
                    </div>
                </div>
            @endif

            {{-- manipulate --}}
            <div class="w-[42.5vw] h-[1px] m-1 sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3"></div>
            <div class="w-[42.5vw] h-[1px] m-1 sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3"></div>
            <div class="w-[42.5vw] h-[1px] m-1 sm-350:w-[43vw] sm-400:w-[44vw] sm-440:w-[45vw] sm-500:w-[30vw] sm-640:w-[30.5vw] sm-740:w-[30.2vw] sm-740:m-2 md-830:w-[30.5vw] md-890:w-[22.5vw] md-950:w-[22.7vw] md-1000:w-[22.9vw] lg-1100:w-[253px] lg-1130:w-[247px] lg-1130:m-3"></div>
        </div>

        {{-- pagination --}}
        <div class="w-full flex justify-center my-3 sm-640:mt-10 sm-640:mb-20">{{ $products->links() }}</div>
    </div>

    @include('partials.footer')
@endsection

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush