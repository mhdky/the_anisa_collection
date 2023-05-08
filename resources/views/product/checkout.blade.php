@extends('layouts.main')

@push('liveware-style')
    @livewireStyles
@endpush

@section('container')
    @include('partials.navbar')

    <div class="w-full mt-[65px] p-4 sm-740:w-[700px] sm-740:mx-auto md-768:mt-0">
        <h1 class="text-xl font-bold text-center mt-5">CHECK OUT DETAILS</h1>

        <form action="" method="post" class="flex flex-col mt-7">
            {{-- email --}}
            <label for="email" class="mb-1">Email</label>
            {{-- <p class="text-red-500 text-[14px] mb-1">Error</p> --}}
            <input type="email" name="" id="email" required value="{{ Auth::user()->email }}" class="py-1 px-2 border-black-primary focus:border-black-primary focus:ring-0">
            
            {{-- name --}}
            <label for="name" class="mb-1 mt-5">Nama Penerima</label>
            <input type="text" name="name" id="name" required value="{{ Auth::user()->name }}" class="py-1 px-2 border-black-primary focus:border-black-primary focus:ring-0">
            
            {{-- address --}}
            <label for="address" class="mb-1 mt-5">Alamat Lengkap</label>
            <textarea name="address" id="address" required placeholder="Masukan alamat lengkap" class="py-1 px-2 border-black-primary focus:border-black-primary focus:ring-0"></textarea>
            
            @livewire('product.shipping-cost')
            
            {{-- No hp --}}
            <label for="No hp" class="mb-1 mt-5">Nomor Handphone</label>
            <input type="tel" name="user_phone_number" id="No hp" required placeholder="No hp yang aktif" class="py-1 px-2 border-black-primary focus:border-black-primary focus:ring-0">
            
            {{-- pesan --}}
            <label for="pesan" class="mb-1 mt-5">Pesan</label>
            <textarea name="pesan" id="pesan" placeholder="Masukan Pesan" required class="h-32 py-1 px-2 border-black-primary focus:border-black-primary focus:ring-0"></textarea>
        
            <button type="submit" class="bg-black-primary w-full mt-5 py-2 text-white font-medium" onclick="return confirm('Yakin semua data telah di isi dengan benar?')">Check Out</button>
        </form>
    </div>

    @include('partials.footer')
@endsection

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush

@push('livewire-script')
    @livewireScripts
@endpush