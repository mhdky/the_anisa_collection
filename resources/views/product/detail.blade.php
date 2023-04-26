@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <div class="w-full flex flex-col mt-16 md-768:bg-gray-secondary md-768:flex-row md-768:mt-5 md-768:w-[96%] md-768:mx-auto md-768:rounded-[10px] md-768:overflow-hidden lg-1100:w-[1065px]">
        {{-- image --}}
        <div class="bg-gray-secondary w-full mx-auto p-5 md-768:w-1/2 md-768:h-max">
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product" class="w-full">
        </div>
    
        <div class="bg-gray-secondary w-full mt-3 mx-auto py-5 flex flex-col md-768:w-1/2 md-768:mt-0">
            {{-- product price --}}                
            <p class="bg-yellow-secondary w-max text-sm text-yellow-primary font-bold mb-2 pl-5 pr-2 py-2 border border-yellow-primary rounded-r-[5px] md-768:order-2 md-768:mt-3 md-768:ml-5 md-768:pl-2 md-768:rounded-l-[5px]">Rp. {{ number_format($product->price, 0, '', '.') }}</p>
            
            {{-- product name --}}
            <h1 class="text-slate-secondary text-lg font-bold mx-5 md-768:order-1 md-768:text-2xl">{{ Str::title($product->name) }}</h1>
    
            {{-- detail --}}
            <div class="w-full px-5 mt-3 md-768:order-3">
                <table class="w-full">
                    <tr>
                        <td class="w-24 text-sm text-[#929292] font-bold py-1">Stock</td>
                        <td class="text-sm text-[#929292] font-bold py-1 w-14 text-center">:</td>
                        <td class="text-sm text-slate-secondary font-bold py-1">{{ $product->stock }}</td>
                    </tr>
                    <tr>
                        <td class="w-24 text-sm text-[#929292] font-bold py-1">Ukuran</td>
                        <td class="text-sm text-[#929292] font-bold py-1 w-14 text-center">:</td>
                        <td class="text-sm text-slate-secondary font-bold py-1">{{ $product->size }}</td>
                    </tr>
                    
                    <form action="/order/{{ $product->id }}" method="post">
                        @csrf
                    <tr>
                        <td class="w-24 text-sm text-[#929292] font-bold py-1">Jumlah Order</td>
                        <td class="text-sm text-[#929292] font-bold py-1 w-14 text-center">:</td>
                        <td class="text-sm text-slate-secondary font-bold py-1 "><input type="number" name="jumlah_order" min="1" max="{{ $product->stock }}" required class="bg-transparent w-full h-7 rounded-[5px]"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="pt-3"><button type="submit" class="bg-yellow-primary w-full py-2 rounded-[5px] text-white font-bold hover:bg-yellow-hover">Shop now</button></td>
                    </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
    
    <div class="w-full flex md-768:justify-center md-800:w-full md-800:justify-start md-800:pl-4 md-850:pl-5 lg-1100:w-[1100px] lg-1100:mx-auto lg-1100:pl-[18px]">
        <div class="bg-gray-secondary w-full mt-3 p-5 md-768:w-[96%] md-768:rounded-[10px] md-800:w-[768px]">
            {{-- name section spesifikasi product --}}
            <h1 class="bg-gray-th w-full mb-3 p-2 text-slate-secondary font-bold">
                Spesifikasi Produk
            </h1>
    
            <table class="w-full">
                <tr>
                    <td class="w-[132px] text-sm text-[#929292] font-bold py-1">Merek</td>
                    <td class="text-sm text-slate-secondary font-bold py-1">{{ Str::title($product->merek) }}</td>
                </tr>
                <tr>
                    <td class="w-[132px] text-sm text-[#929292] font-bold py-1">Bahan</td>
                    <td class="text-sm text-slate-secondary font-bold py-1">{{ Str::title($product->bahan) }}</td>
                </tr>
                <tr>
                    <td class="w-[132px] text-sm text-[#929292] font-bold py-1">Jenis Lengan</td>
                    <td class="text-sm text-slate-secondary font-bold py-1">{{ Str::title($product->jenis_lengan) }}</td>
                </tr>
                <tr>
                    <td class="w-[132px] text-sm text-[#929292] font-bold py-1">Ukuran</td>
                    <td class="text-sm text-slate-secondary font-bold py-1">{{ $product->size }}</td>
                </tr>
            </table>
    
            {{-- name section Deskripsi product --}}
            <h1 class="bg-gray-th w-full mt-5 mb-3 p-2 text-slate-secondary font-bold">
                Deskripsi Produk
            </h1>
    
            <p class="text-slate-secondary text-sm text-justify leading-7">{{ $product->detail }}</p>
        </div>
    </div>

    @include('partials.footer')
@endsection
    
@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush

{{-- @include('partials.alert-ok-to-cart') --}}