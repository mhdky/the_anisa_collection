@extends('layouts.admin-main')

@section('container')
    <div class="w-full flex-[2] mt-[65px] pb-20 md-900:mt-[64px]">
        {{-- tambah produk --}}
        <div class="bg-white w-full h-14 fixed z-10 px-3 pt-3">
            <a href="/dashboard/product/add" class="bg-white w-[152px] h-9 flex justify-evenly items-center rounded-md border border-yellow-primary hover:bg-yellow-50">
                <p class="text-zinc-600 text-[14px]">Tambah Produk</p>
                <div class="bg-yellow-primary w-4 h-4 rounded-sm flex justify-center items-center"><i class="fas fa-plus text-white text-[12px]"></i></div>
            </a>
        </div>

        {{-- container card produk --}}
        <div class="w-full mt-16 flex flex-col items-center px-3">
            <form id="delete-post-form" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            
            @if ($products->count() > 0)
                @foreach ($products as $product)
                    {{-- card produk --}}
                    <div class="cardProductBorder border border-zinc-200 w-full mb-4 px-3 pt-3 pb-10 rounded-md relative" data-product-id="{{ $product->id }}">
                        {{-- button option --}}
                        <div class="buttonOption w-4 h-5 absolute right-1 top-2 flex flex-col justify-between items-center md-800:cursor-pointer md-800:right-2 md-800:top-3">
                            <span class="bg-zinc-600 w-1 h-[5px] rounded-full"></span>
                            <span class="bg-zinc-600 w-1 h-[5px] rounded-full"></span>
                            <span class="bg-zinc-600 w-1 h-[5px] rounded-full"></span>
                        </div>

                        <div class="optionMenu bg-white py-1 border border-zinc-200 rounded-md absolute z-20 right-5 top-2 hidden md-800:right-7">
                            <a href="/dashboard/product/{{ $product->url }}/edit" class="flex items-center w-32 h-9 px-3 hover:bg-zinc-100 cursor-default md-800:cursor-pointer">
                                <i class="fa-solid fa-pen-to-square text-zinc-600 mr-3"></i>
                                <p class="text-zinc-600 text-[14px]">Edit</p>
                            </a>

                            <div class="btnHapusProductAdm flex items-center w-32 h-9 px-3 hover:bg-zinc-100 cursor-default md-800:cursor-pointer">
                                <i class="fa-solid fa-trash text-zinc-600 mr-3"></i>
                                <p class="text-zinc-600 text-[14px]">Hapus</p>
                            </div>
                        </div>

                        <div class="closeOptionMenu fixed top-0 right-0 bottom-0 left-0 z-10 hidden"></div>

                        <div class="w-full flex">
                            {{-- image --}}
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-[150px] h-[180px] object-cover">
                            
                            {{-- title, size, price --}}
                            <div class="w-full ml-3 flex-[2] md-768:ml-5">
                                {{-- title --}}
                                <p class="text-[14px] text-zinc-400">Judul Produk</p>
                                <a href="/product/{{ $product->url }}" class="text-[14px] text-zinc-600 leading-[17px] mt-1 lg-1280:w-[800px]">{{ Str::title($product->name) }}</a>

                                {{-- size --}}
                                <p class="text-[14px] text-zinc-400 mt-3 md-768:mt-3">Ukuran</p>
                                <p class="text-[14px] text-zinc-600 leading-[15px] mt-1">{{ $product->size }}</p>

                                {{-- price --}}
                                <p class="text-[14px] text-zinc-400 mt-3 md-768:mt-3">Harga</p>
                                <p class="text-[14px] text-zinc-600 leading-[15px] mt-1">Rp.{{ number_format($product->price, 0, '', '.') }}</p>
                            </div>
                        </div>

                        {{-- button detail mobile --}}
                        <div class="buttonDetilMobile absolute right-2 mt-2 bottom-2 text-zinc-600 text-[14px] md-800:cursor-pointer"><p>...Selengkapnya</p></div>
                        {{-- button hidden detail mobile --}}
                        <div class="buttonDetilMobileHidden hidden absolute z-[2] right-2 bottom-1 text-zinc-600 text-[14px] md-800:cursor-pointer md-800:right-3 md-800:bottom-2"><p>Tutup</p></div>

                        <div class="detailDescriptionCardMobile w-full mt-3 relative hidden">
                            {{-- merk --}}
                            @if ($product->merek !== NULL)
                                <p class="text-[14px] text-zinc-400">Merk</p>
                                <p class="text-[14px] text-zinc-600 leading-[15px] mt-1">{{ Str::title($product->merek) }}</p>
                            @endif
                        
                            {{-- category --}}
                            <p class="text-[14px] text-zinc-400 mt-4 md-768:mt-5">Kategori</p>
                            <p class="text-[14px] text-zinc-600 leading-[15px] mt-1">{{ $product->category->name }}</p>

                            @if ($product->bahan !== NULL)
                                {{-- bahan --}}
                                <p class="text-[14px] text-zinc-400 mt-4 md-768:mt-5">Bahan</p>
                                <p class="text-[14px] text-zinc-600 leading-[15px] mt-1">{{ Str::title($product->bahan) }}</p>
                            @endif

                            @if ($product->jenis_lengan !== NULL)
                                {{-- jenis lengan --}}
                                <p class="text-[14px] text-zinc-400 mt-4 md-768:mt-5">Jenis Lengan</p>
                                <p class="text-[14px] text-zinc-600 leading-[15px] mt-1">{{ Str::title($product->jenis_lengan) }}</p>
                            @endif

                            {{-- stock --}}
                            <p class="text-[14px] text-zinc-400 mt-4 md-768:mt-5">Stock</p>
                            <p class="text-[14px] text-zinc-600 leading-[15px] mt-1">{{ $product->stock }}</p>

                            {{-- deskripsi --}}
                            <p class="text-[14px] text-zinc-400 mt-4 md-768:mt-5">Deskripsi</p>
                            <div class="md-1000:w-[800px] text-[14px] text-zinc-600 text-justify leading-[18px] list-disc">
                                <p class="-mt-4 mb-5 list-disc">{!! $product->detail !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- pagination --}}
                <div class="w-full flex justify-center my-3 sm-640:mt-10 sm-640:mb-20">{{ $products->links() }}</div>
            @else
                <div class="w-full h-[50vh] flex flex-col justify-center items-center">
                    <p class="text-slate-600 font-bold">Produk tidak ditamukan</p>
                    <a href="/dashboard/product" class="mt-1 text-yellow-primary text-sm font-bold underline">Kembali</a>
                </div>
            @endif
        </div>
    </div>

    {{-- alert delete --}}
    @include('partials.dashboard.alert-delete')
@endsection

@push('nav-admin')
    <script src="{{ asset('js/nav-admin.js') }}"></script>
@endpush

@push('detail-card-product')
    <script src="{{ asset('js/detail-card-product.js') }}"></script>
@endpush