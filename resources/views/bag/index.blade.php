@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <div class="w-full mt-20 mb-32 px-4 md-770:w-[770px] md-770:mx-auto">
        {{-- product bag --}}
        <div class="w-full flex flex-col">
            <div class="w-full flex flex-col overflow-auto">
                <div class="w-max flex border-b border-zinc-200">
                    <p class="w-72 px-3 py-2 text-zinc-800 font-bold">Product</p>
                    <p class="w-40 px-3 py-2 text-zinc-800 font-bold">Price</p>
                    <p class="w-32 px-3 py-2 text-zinc-800 font-bold">Quantity</p>
                    <p class="w-40 px-3 py-2 text-zinc-800 font-bold">Subtotal</p>
                </div>
                <div class="w-max flex border-b border-zinc-200">
                    <div class="w-72 px-3 py-2 flex items-center">
                        {{-- edit product bag --}}
                        <form action="" method="post" class="mr-3">
                            @csrf
                            <button type="submit" class="border border-black-primary w-5 h-5 rounded-full flex justify-center items-center">
                                <i class="fas fa-times text-black-primary text-[13px]"></i>
                            </button>
                        </form>
                        {{-- image --}}
                        <img src="{{ asset('img/product-1.jpg') }}" alt="" class="w-20 h-20 mr-3 object-cover">
                        {{-- product title --}}
                        <h2 class="text-[14px] font-medium">{{ Str::title('Lorem ipsum dolor sit amet consectetur') }}</h2>
                    </div>
                    <p class="w-40 flex items-center px-3 py-2 text-[14px]">Rp. 200.500</p>
                    <p class="w-32 flex items-center px-3 py-2 text-[14px]">2</p>
                    <p class="w-40 flex items-center px-3 py-2 text-[14px]">Rp. 500.000</p>
                </div>
                <div class="w-max flex border-b border-zinc-200">
                    <div class="w-72 px-3 py-2 flex items-center">
                        {{-- edit product bag --}}
                        <form action="" method="post" class="mr-3">
                            @csrf
                            <button type="submit" class="border border-black-primary w-5 h-5 rounded-full flex justify-center items-center">
                                <i class="fas fa-times text-black-primary text-[13px]"></i>
                            </button>
                        </form>
                        {{-- image --}}
                        <img src="{{ asset('img/product-11.jpg') }}" alt="" class="w-20 h-20 mr-3 object-cover">
                        {{-- product title --}}
                        <h2 class="text-[14px] font-medium">{{ Str::title('Lorem ipsum dolor sit amet consectetur') }}</h2>
                    </div>
                    <p class="w-40 flex items-center px-3 py-2 text-[14px]">Rp. 200.500</p>
                    <p class="w-32 flex items-center px-3 py-2 text-[14px]">2</p>
                    <p class="w-40 flex items-center px-3 py-2 text-[14px]">Rp. 500.000</p>
                </div>
            </div>
        </div>

        {{-- Total price --}}
        <div class="w-full mt-10">
            <div class="w-full px-4 pb-2 border-b border-zinc-200">
                <h2 class="text-black-primary font-bold">PRODUCT TOTAL</h2>
            </div>

            <div class="w-full flex justify-between mt-5 pb-4 px-4">
                <h3 class="text-black-primary text-[14px] font-medium">Subtotal</h3>
                <h2 class="text-black-primary text-[14px] font-medium">Rp 1.000.000</h2>
            </div>

            <div class="w-full flex justify-between pb-4 px-4">
                <h3 class="text-black-primary text-[14px] font-medium">Shipping Cost</h3>
                <h2 class="text-black-primary text-[14px] font-medium">Rp 32.000</h2>
            </div>

            <div class="w-full flex justify-between pb-4 px-4">
                <h3 class="text-black-primary text-[14px] font-medium">Total</h3>
                <h2 class="text-black-primary text-[14px] font-medium">Rp 1.032.000</h2>
            </div>

            <form action="">
                @csrf
                <button type="submit" class="bg-black-primary w-full py-3 rounded-md text-white text-[14px]">Process</button>
            </form>
        </div>
    </div>

    @include('partials.footer')
@endsection

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush