@extends('layouts.admin-main')

@section('container')
    <div class="w-full flex-[2] mt-[65px] pb-20 md-900:mt-[64px]">
        <div class="w-full p-3">
            <div class="flex items-center w-max md-800:cursor-pointer" onclick="goBack()">
                <i class="fas fa-arrow-left text-zinc-600 mr-2"></i>
                <p class="text-zinc-600 text-[14px] mt-0.5">Kembali</p>
            </div>

            {{-- form add product --}}
            <div class="w-full flex justify-center mt-8">
                <form action="/dashboard/product/{{ $product->id }}/update" method="post" enctype="multipart/form-data" class="w-full flex flex-col">
                    @csrf
                    @method('put')
                    <label for="category_id" class="text-zinc-600 text-[14px]">Kategori Produk</label>
                    @error('category_id')
                        <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                    @enderror
                    <select name="category_id" id="category_id" required class="border-zinc-300 text-zinc-600 text-[14px] h-10 mt-2 rounded-md focus:bg-zinc-50 focus:border-zinc-300 focus:ring-0">
                        <option selected disabled>Pilih Kategori produk</option>
                        @foreach ($categories as $category)
                            @if (old('category_id', $product->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>

                    {{-- name --}}
                    <label for="name" class="text-zinc-600 text-[14px] mt-5">Judul Produk</label>
                    @error('name')
                        <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                    @enderror
                    <input type="text" name="name" id="name" required value="{{ old('name', $product->name) }}" minlength="1" maxlength="200" placeholder="Judul Produk" class="border-zinc-300 text-zinc-600 text-[14px] h-10 mt-2 rounded-md focus:bg-zinc-50 focus:border-zinc-300 focus:ring-0">
                
                    {{-- size --}}
                    <label for="size" class="text-zinc-600 text-[14px] mt-5">Ukuran Produk</label>
                    @error('size')
                        <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                    @enderror
                    <select name="size" id="size" required class="border-zinc-300 text-zinc-600 text-[14px] h-10 mt-2 rounded-md focus:bg-zinc-50 focus:border-zinc-300 focus:ring-0">
                        <option selected disabled>Pilih Ukuran Produk</option>
                        <option value="S" {{ (old('size', $product->size) === 'S' ? 'selected' : '') }}>S</option>
                        <option value="M" {{ (old('size', $product->size) === 'M' ? 'selected' : '') }}>M</option>
                        <option value="L" {{ (old('size', $product->size) === 'L' ? 'selected' : '') }}>L</option>
                        <option value="XL" {{ (old('size', $product->size) === 'XL' ? 'selected' : '') }}>XL</option>
                        <option value="XLL" {{ (old('size', $product->size) === 'XLL' ? 'selected' : '') }}>XLL</option>
                        <option value="XXL" {{ (old('size', $product->size) === 'XXL' ? 'selected' : '') }}>XXL</option>
                        <option value="27" {{ (old('size', $product->size) === '27' ? 'selected' : '') }}>27</option>
                        <option value="28" {{ (old('size', $product->size) === '28' ? 'selected' : '') }}>28</option>
                        <option value="29" {{ (old('size', $product->size) === '29' ? 'selected' : '') }}>29</option>
                        <option value="30" {{ (old('size', $product->size) === '30' ? 'selected' : '') }}>30</option>
                        <option value="31" {{ (old('size', $product->size) === '31' ? 'selected' : '') }}>31</option>
                        <option value="32" {{ (old('size', $product->size) === '32' ? 'selected' : '') }}>32</option>
                        <option value="33" {{ (old('size', $product->size) === '33' ? 'selected' : '') }}>33</option>
                        <option value="34" {{ (old('size', $product->size) === '34' ? 'selected' : '') }}>34</option>
                        <option value="35" {{ (old('size', $product->size) === '35' ? 'selected' : '') }}>35</option>
                        <option value="36" {{ (old('size', $product->size) === '36' ? 'selected' : '') }}>36</option>
                        <option value="37" {{ (old('size', $product->size) === '37' ? 'selected' : '') }}>37</option>
                        <option value="38" {{ (old('size', $product->size) === '38' ? 'selected' : '') }}>38</option>
                        <option value="39" {{ (old('size', $product->size) === '39' ? 'selected' : '') }}>39</option>
                        <option value="40" {{ (old('size', $product->size) === '40' ? 'selected' : '') }}>40</option>
                        <option value="41" {{ (old('size', $product->size) === '41' ? 'selected' : '') }}>41</option>
                        <option value="42" {{ (old('size', $product->size) === '42' ? 'selected' : '') }}>42</option>
                    </select>

                    {{-- price --}}
                    <label for="price" class="text-zinc-600 text-[14px] mt-5">Harga Produk</label>
                    @error('price')
                        <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                    @enderror
                    <input type="number" name="price" id="price" required max="2147483647" value="{{ old('price', $product->price) }}" minlength="1" maxlength="15" placeholder="Harga Produk" class="border-zinc-300 text-zinc-600 text-[14px] h-10 mt-2 rounded-md focus:bg-zinc-50 focus:border-zinc-300 focus:ring-0">
                    
                    {{-- merk --}}
                    <label for="merk" class="text-zinc-600 text-[14px] mt-5">Merk Produk</label>
                    @error('merek')
                        <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                    @enderror
                    <input type="text" name="merek" id="merk" value="{{ old('merek', $product->merek) }}" minlength="1" maxlength="30" placeholder="Merk Produk" class="border-zinc-300 text-zinc-600 text-[14px] h-10 mt-2 rounded-md focus:bg-zinc-50 focus:border-zinc-300 focus:ring-0">
                    
                    {{-- bahan --}}
                    <label for="bahan" class="text-zinc-600 text-[14px] mt-5">Bahan Produk</label>
                    @error('bahan')
                        <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                    @enderror
                    <input type="text" name="bahan" id="bahan" value="{{ old('bahan', $product->bahan) }}" minlength="1" maxlength="100" placeholder="Bahan Produk" class="border-zinc-300 text-zinc-600 text-[14px] h-10 mt-2 rounded-md focus:bg-zinc-50 focus:border-zinc-300 focus:ring-0">
                    
                    {{-- jenis lengan --}}
                    <label for="jenis_lengan" class="text-zinc-600 text-[14px] mt-5">Jenis Lengan</label>
                    @error('jenis_lengan')
                        <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                    @enderror
                    <input type="text" name="jenis_lengan" id="jenis_lengan" value="{{ old('jenis_lengan', $product->jenis_lengan) }}" minlength="0" maxlength="100" placeholder="Jenis Lengan" class="border-zinc-300 text-zinc-600 text-[14px] h-10 mt-2 rounded-md focus:bg-zinc-50 focus:border-zinc-300 focus:ring-0">
                    
                    {{-- Stock Produk --}}
                    <label for="stock" class="text-zinc-600 text-[14px] mt-5">Stock Produk</label>
                    @error('stock')
                        <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                    @enderror
                    <input type="number" name="stock" id="stock" required value="{{ old('stock', $product->stock) }}" minlength="1" maxlength="15" placeholder="Stock Produk" class="border-zinc-300 text-zinc-600 text-[14px] h-10 mt-2 rounded-md focus:bg-zinc-50 focus:border-zinc-300 focus:ring-0">
                    
                    {{-- deskripsi --}}
                    <label for="detail" class="text-zinc-600 text-[14px] mt-5">Deskripsi Produk</label>
                    @error('detail')
                        <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                    @enderror
                    {{-- <textarea name="detail" id="detail" required minlength="1" maxlength="100000" class="border-zinc-300 text-zinc-600 text-[14px] h-20 mt-2 rounded-md focus:bg-zinc-50 focus:border-zinc-300 focus:ring-0">{{ old('detail') }}</textarea> --}}
                    <div class="mt-3">
                        <input id="detail" type="hidden" name="detail" value="{{ old('detail', $product->detail) }}">
                        <trix-editor input="detail"></trix-editor>
                    </div>

                    {{-- image --}}
                    <div class="w-52 flex flex-col mt-10">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="img-preview w-full mb-3">
                        @else
                            <img src="" class="img-preview w-full mb-3">
                        @endif
                        @error('image')
                            <p class="text-red-500 text-[14px] mt-1">{{ $message }}</p>
                        @enderror
                        <div class="bg-zinc-100 w-full h-10 px-4 rounded-md border border-zinc-200 relative flex justify-center items-center">
                            <p class="text-zinc-600 text-[14px]">Unggah Gambar Produk</p>
                            <input type="hidden" name="oldImage" value="{{ $product->image }}">
                            <input type="file" name="image" onchange="previewImg()" class="imageAdm bg-pink-400 absolute left-0 w-full opacity-0 md-800:cursor-pointer">
                        </div>
                    </div>
                
                    <button type="submit" class="bg-yellow-primary border-zinc-300 text-white text-[14px] h-10 mt-5 rounded-md focus:ring-0">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('nav-admin')
    <script src="{{ asset('js/nav-admin.js') }}"></script>
@endpush

@push('preview-image')
    <script src="{{ asset('js/preview-image.js') }}"></script>
@endpush

@push('go-back')
    <script src="{{ asset('js/go-back.js') }}"></script>
@endpush

@push('trix-upload')
    <script src="{{ asset('js/trix-upload.js') }}"></script>
@endpush