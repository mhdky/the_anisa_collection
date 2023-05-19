@extends('layouts.main')

@push('liveware-style')
    @livewireStyles
@endpush

@section('container')
    @include('partials.navbar')

    <div class="w-full mt-[65px] mb-32 p-4 sm-740:w-[700px] sm-740:mx-auto md-768:mt-0">
        <h1 class="text-xl font-bold text-center mt-5">CHECK OUT DETAILS</h1>

        @if (!empty($order->url) && $order->url !== 'back')
            <form action="/checkout/{{ $order->id }}" method="post" class="flex flex-col mt-7">
                @csrf
                {{-- email --}}
                <label for="email" class="mb-1">Email</label>
                @error('email_penerima')
                    <p class="text-red-500 text-[14px] mb-1">{{ $message }}</p>
                @enderror
                <input type="email" name="email_penerima" id="email" maxlength="200" required value="{{ old('email_penerima', Auth::user()->email) }}" class="p-2 border-black-primary rounded-md focus:border-black-primary focus:ring-0">
                
                {{-- name --}}
                <label for="name" class="mb-1 mt-5">Nama Penerima</label>
                @error('nama_penerima')
                    <p class="text-red-500 text-[14px] mb-1">{{ $message }}</p>
                @enderror
                <input type="text" name="nama_penerima" id="name" maxlength="200" required value="{{ old('nama_penerima', Auth::user()->name) }}" class="p-2 border-black-primary rounded-md focus:border-black-primary focus:ring-0">
                
                {{-- address --}}
                <label for="address" class="mb-1 mt-5">Alamat Lengkap</label>
                @error('alamat_penerima')
                    <p class="text-red-500 text-[14px] mb-1">{{ $message }}</p>
                @enderror
                <textarea name="alamat_penerima" id="alamat_penerima" maxlength="255" required value="{{ old('alamat_penerima') }}" placeholder="Masukan alamat lengkap" class="p-2 border-black-primary rounded-md focus:border-black-primary focus:ring-0"></textarea>
                
                @livewire('product.shipping-cost')
                
                {{-- kecamatan --}}
                <label for="kecamatan" class="mb-1 mt-5">Kecamatan</label>
                @error('kecamatan')
                    <p class="text-red-500 text-[14px] mb-1">{{ $message }}</p>
                @enderror
                <input type="text" name="kecamatan" id="kecamatan" maxlength="50" value="{{ old('kecamatan') }}" required placeholder="Masukan Nama Kecamatan" class="p-2 border-black-primary rounded-md focus:border-black-primary focus:ring-0">
                
                {{-- kode pos --}}
                <label for="code_pos" class="mb-1 mt-5">Kode Pos</label>
                @error('code_pos')
                    <p class="text-red-500 text-[14px] mb-1">{{ $message }}</p>
                @enderror
                <input type="text" name="code_pos" id="code_pos" minlength="1" maxlength="7" value="{{ old('code_pos') }}" required placeholder="Masukan Code Pos" class="p-2 border-black-primary rounded-md focus:border-black-primary focus:ring-0">
                
                {{-- No hp --}}
                <label for="No hp" class="mb-1 mt-5">Nomor Handphone</label>
                @error('nohp_penerima')
                    <p class="text-red-500 text-[14px] mb-1">{{ $message }}</p>
                @enderror
                <input type="tel" name="nohp_penerima" id="No hp" maxlength="17" required value="{{ old('nohp_penerima') }}" placeholder="No hp yang aktif" class="p-2 border-black-primary rounded-md focus:border-black-primary focus:ring-0">
                
                {{-- pesan --}}
                <label for="pesan" class="mb-1 mt-5">Pesan</label>
                @error('pesan_penerima')
                    <p class="text-red-500 text-[14px] mb-1">{{ $message }}</p>
                @enderror
                <textarea name="pesan_penerima" id="pesan_penerima" placeholder="Masukan Pesan" maxlength="400" required class="h-32 p-2 border-black-primary rounded-md focus:border-black-primary focus:ring-0">{{ old('pesan_penerima') }}</textarea>
            
                <button type="submit" class="bg-black-primary w-full mt-5 p-2 text-white font-medium rounded-md" onclick="return confirm('Yakin semua data telah di isi dengan benar?')">Check Out</button>
            </form>
        @endif
    </div>

    @include('partials.footer')
    
    @if (empty($order->url))
        <div class="bg-white fixed top-0 right-0 bottom-0 left-0 z-40"></div>
        <script>window.location='/404'</script>
    @endif

@endsection


@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush

@push('livewire-script')
    @livewireScripts
@endpush