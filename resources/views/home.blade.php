@extends('layouts.main')

@section('container')
    @include('partials.nav')

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
@endsection

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush