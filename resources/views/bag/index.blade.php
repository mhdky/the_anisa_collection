@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <div class="w-full mt-20 mb-32 px-4 md-768:mt-32 md-770:w-[770px] md-770:mx-auto">
        {{-- product bag --}}
        <div class="w-full flex flex-col">
            <div class="w-full flex flex-col overflow-auto">
                <div class="w-max flex border-b border-zinc-200">
                    <p class="w-72 px-3 py-2 text-zinc-800 font-bold">Product</p>
                    <p class="w-40 px-3 py-2 text-zinc-800 font-bold">Price</p>
                    <p class="w-32 px-3 py-2 text-zinc-800 font-bold">Quantity</p>
                    <p class="w-40 px-3 py-2 text-zinc-800 font-bold">Subtotal</p>
                </div>
                @if ($bag->count() < 1)
                    <p class="w-full text-center pt-20 pb-10 font-medium">Product Nothing Yet</p>
                @endif
                @foreach ($bag as $tas)
                    <div class="w-max flex border-b border-zinc-200">
                        <div class="w-72 px-3 py-2 flex items-center">
                            {{-- delete product bag --}}
                            <form action="/bag/{{ $tas->id }}/delete" method="post" class="mr-3">
                                @csrf
                                @method('delete')
                                <button type="submit" class="border border-black-primary w-5 h-5 rounded-full flex justify-center items-center">
                                    <i class="fas fa-times text-black-primary text-[13px]"></i>
                                </button>
                            </form>
                            {{-- image --}}
                            <div class="bg-pink-400 w-20 h-20 mr-3">
                                <img src="{{ asset('storage/' . $tas->product->image) }}" alt="" class="w-full h-full object-cover">
                            </div>
                            {{-- product title --}}
                            <a href="{{ '/product/' . $tas->product->url }}" class="text-[14px] font-medium h-max flex-[2]">{{ Str::title($tas->product->name) }}</a>
                        </div>
                        <p class="w-40 flex items-center px-3 py-2 text-[14px]">Rp. {{ number_format($tas->product->price, '0', '', '.') }}</p>
                        <p class="w-32 flex items-center px-3 py-2 text-[14px]">{{ number_format($tas->total_order, '0', '', '.') }}</p>
                        <p class="w-40 flex items-center px-3 py-2 text-[14px]">Rp. {{ number_format($tas->total_price, '0', '', '.') }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Total price --}}
        <div class="w-full mt-10">
            <div class="w-full px-4 pb-2 border-b border-zinc-200">
                <h2 class="text-black-primary font-bold">PRODUCT TOTAL</h2>
            </div>

            <div class="w-full flex justify-between mt-5 pb-4 px-4">
                <h3 class="text-black-primary text-[14px] font-medium">Total</h3>
                @if ($order)
                    <h2 class="text-black-primary text-[14px] font-medium">Rp {{ number_format($order->total_price, '0', '', '.') }}</h2>
                @endif
            </div>

            @if (empty($order->url) || $bag->count() < 1)
                <button class="bg-black-primary w-full py-3 rounded-md text-white text-[14px] select-none">Checkout</button>
            @else
                <button class="bg-black-primary w-full py-3 rounded-md text-white text-[14px] select-none" onclick="window.location='/checkout/{{ $order->url }}'">Checkout</button>
            @endif
        </div>
    </div>

    @include('partials.footer')
@endsection

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush