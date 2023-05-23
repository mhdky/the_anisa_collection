@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <div class="w-full lg-1100:w-[1100px] lg-1100:mx-auto">
        <div class="w-full mt-[65px] p-4 flex flex-col sm-740:flex-row md-768:mt-0">
            {{-- image product --}}
            <div class="w-full sm-740:w-1/2 sm-740:h-max sm-740:pr-5">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full">
            </div>
    
            <div class="w-full mt-7 sm-740:w-1/2 sm-740:h-max">
                {{-- product name --}}
                <h1 class="text-xl font-bold">{{ Str::title($product->name) }}</h1>
    
                {{-- product price --}}
                <h3 class="text-yellow-primary text-lg font-medium mt-2 pb-2">Rp. {{ number_format($product->price, '0', '', '.') }}</h3>
            
                {{-- product size --}}
                <div class="flex mt-7">
                    <p class="font-medium w-32">Fit Size</p>
                    <p class="text-zinc-500 font-medium">{{ $product->size }}</p>
                </div>
    
                {{-- product stock --}}
                <div class="flex mt-5">
                    <p class="font-medium w-32">Stock</p>
                    <p class="text-zinc-500 font-medium">{{ $product->stock }}</p>
                </div>
    
                <form action="/order/{{ $product->id }}" method="post" class="mt-5 sm-740:flex sm-740:flex-col">
                    @csrf
                    {{-- total order --}}
                    <div class="w-full flex items-center">
                        <p class="font-medium w-32">Quantity</p>
                        <div class="flex items-center">
                            <input type="hidden" value="{{ $product->stock }}" class="thisStock">
                            <div class="btnMinus w-6 h-6 flex justify-center items-center rounded-md hover:bg-zinc-100 md-800:cursor-pointer"><i class="fas fa-minus text-zinc-500 text-[13px]"></i></div>
                            <input type="number" name="total_order" value="1" min="1" max="{{ $product->stock }}" class="InputQuantity w-14 py-0 px-2 border-0 text-zinc-500 text-center focus:border-0 focus:ring-0">
                            <div class="btnPlus w-6 h-6 flex justify-center items-center rounded-md hover:bg-zinc-100 md-800:cursor-pointer"><i class="fas fa-plus text-zinc-500 text-[13px]"></i></div>
                        </div>
                    </div>
    
                    {{-- error --}}
                    @if (session()->has('gagal'))
                        <div class="flex">
                            <span class="w-32"></span>
                            <p class="text-red-500 text-sm mt-2">{{ session('gagal') }}</p>
                        </div>
                    @endif
    
                    <button type="submit" class="bg-black-primary w-full mt-7 py-3 text-white font-medium rounded-md">Add To Shopping Bag</button>
                </form>
            </div>
        </div>

        {{-- spesifikasi product --}}
        <div class="w-full mt-10 px-4">
            <h1 class="text-lg font-bold pb-3 border-b border-zinc-300">PRODUCT SPECIFICATIONS</h1>

            {{-- product merk --}}
            <div class="flex mt-7">
                <p class="font-medium w-32 h-max">Merk</p>
                <p class="text-zinc-500 font-medium h-max flex-[2]">{{ Str::title($product->merek) }}</p>
            </div>

            {{-- bahan --}}
            <div class="flex mt-7">
                <p class="font-medium w-32 h-max">Material</p>
                <p class="text-zinc-500 font-medium h-max flex-[2]">{{ Str::title($product->bahan) }}</p>
            </div>

            {{-- Jenis lengan --}}
            <div class="flex mt-7">
                <p class="font-medium w-32 h-max">Jenis Lengan</p>
                <p class="text-zinc-500 font-medium h-max flex-[2]">{{ Str::title($product->jenis_lengan) }}</p>
            </div>

            <div class="mt-7 md-768:w-[700px] text-justify">
                <p class="font-medium">Description</p>
                <p class="text-zinc-500 mt-2 md-768:w-[700px]">{!! $product->detail !!}</p>                
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
    
@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush
@push('quantity-counter')
    <script src="{{ asset('js/quantity-counter.js') }}"></script>
@endpush

@push('script-alert-ok')
    <script src="{{ asset('js/script-alert-ok.js') }}"></script>
@endpush

@include('partials.alert-ok-to-cart')

