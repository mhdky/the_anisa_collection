@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <div class="w-full mt-[65px] mb-32 p-4 sm-740:w-[700px] sm-740:mx-auto md-768:mt-0">
        <div class="w-full">
            <a href="/order" class="w-max mb-7 flex items-center md-800:cursor-pointer">
                <i class="fas fa-arrow-left mr-3"></i>
                <p>Kembali</p>
            </a>
        </div>
        <h1 class="text-xl text-center uppercase font-bold">product payment</h1>
        @if ($pembayaran->status_pembayaran !== 1)
            <p class="mt-7 mb-5 text-lg font-medium">Silahkan lakukan pembayaran sebesar <span class="text-yellow-primary">Rp. {{ number_format($pembayaran->total_amount, '0', '', '.') }}</span> ke Nomor Rekening yang telah kami sediakan di bawah, agar kami dapat memproses pesanan Anda.</p>
        @else
            <p class="mt-7 mb-5 text-lg font-medium">Terima kasih telah melakukan pembayaran sebesar <span class="text-yellow-primary">Rp. {{ number_format($pembayaran->total_amount, '0', '', '.') }}</span>. Jika terdapat kesalahan dalam melakukan Konfirmasi Pembayaran Anda dapat mengubahnya. Terima Kasih telah berbelanja di Anisa Collection.</p>
        
            <div class="w-full mb-7 p-5 border-dashed border-2 border-black-primary rounded-md">
                <div class="flex justify-center items-center">
                    <p class="btnBuktiPembayaran font-medium mr-1 select-none md-800:cursor-pointer">Bukti Pembayaran</p>
                    <i class="iconBuktiPembayaran fas fa-caret-right text-lg"></i>
                </div>

                <div class="buktiPembayaran mt-8 hidden">
                    <div class="w-full border-b border-black-primary py-3 px-2 font-medium">
                        <h2 class="mb-1">Tanggal Pembayaran</h2>
                        <p class="text-zinc-600">{{ (Carbon\Carbon::parse($pembayaran->tanggal_pembayaran)->translatedFormat('d F, Y')) }}</p>
                    </div>
                    <div class="w-full border-b border-black-primary mt-5 py-3 px-2 font-medium">
                        <h2 class="mb-1">Tanggal Pemesanan</h2>
                        <p class="text-zinc-600">{{ (Carbon\Carbon::parse($pembayaran->tanggal_pemesanan)->translatedFormat('d F, Y - H:i')) }} WIB</p>
                    </div>
                    <div class="w-full border-b border-black-primary mt-5 py-3 px-2 font-medium">
                        <h2 class="mb-1">Nama Akun Bank</h2>
                        <p class="text-zinc-600">{{ Str::upper($pembayaran->nama_akun_bank) }}</p>
                    </div>
                    <div class="w-full border-b border-black-primary mt-5 py-3 px-2 font-medium">
                        <h2 class="mb-1">Nama Bank</h2>
                        <p class="text-zinc-600">{{ Str::upper($pembayaran->nama_bank) }}</p>
                    </div>
                    <div class="w-full border-b border-black-primary my-5 py-3 px-2 font-medium">
                        <h2 class="mb-1">Jumlah Pembayaran</h2>
                        <p class="text-zinc-600">Rp. {{ number_format($pembayaran->jumlah_transfer, '0', '', '.') }}</p>
                    </div>
                    <div class="w-full sm-375:w-[300px]">
                        <img src="{{ asset('storage/' . $pembayaran->gambar_bukti_pembayaran) }}" alt="">
                    </div>
                </div>
            </div>
        @endif
    
        {{-- detail bank --}}
        <div class="mb-7">
            <h3 class="text-yellow-primary text-lg font-bold mb-3">{{ Str::upper($storeInformation->name_bank_account) }}</h3>

            <div class="flex items-center">
                <p class="font-medium w-40">Bank</p>
                <p class="text-zinc-600 font-medium">{{ Str::upper($storeInformation->bank_name) }}</p>
            </div>

            <div class="flex items-center my-2">
                <p class="font-medium w-40">Nomor Rekening</p>
                <p class="text-zinc-600 font-medium">{{ $storeInformation->rekening_number }}</p>
            </div>

            <div class="flex items-center">
                <p class="font-medium w-40">Kode Bank</p>
                <p class="text-zinc-600 font-medium">{{ $storeInformation->bank_code }}</p>
            </div>
        </div>

        <form action="{{ ($pembayaran->status_pembayaran !== 0 ? '/paysecond/' : '/pay/') }}{{ $pembayaran->id }}" method="post" enctype="multipart/form-data" class="formPay w-full h-0 flex flex-col my-10 overflow-hidden transition-all duration-300">
            @csrf
            @method('patch')
            {{-- tanggal pembayaran --}}
            <label for="tanggal_pembayaran" class="mb-2 font-medium">Tanggal Pembayaran</label>
            @error('tanggal_pembayaran')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" required max="11" value="{{ old('tanggal_pembayaran', $pembayaran->tanggal_pembayaran) }}" class="w-full rounded-md focus:border-black-primary focus:ring-0">

            {{-- nama akun bank --}}
            <label for="nama_akun_bank" class="mt-5 mb-2 font-medium">Nama Akun Bank</label>
            @error('nama_akun_bank')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="text" name="nama_akun_bank" id="nama_akun_bank" placeholder="Masukan Nama Akun" required maxlength="30" value="{{ old('nama_akun_bank', $pembayaran->nama_akun_bank) }}" class="w-full rounded-md focus:border-black-primary focus:ring-0">
            
            {{-- nama bank --}}
            <label for="nama_bank" class="mt-5 mb-2 font-medium">Nama Bank</label>
            @error('nama_bank')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="text" name="nama_bank" id="nama_bank" placeholder="Masukan Nama Bank" required maxlength="30" value="{{ old('nama_bank', $pembayaran->nama_bank) }}" class="w-full rounded-md focus:border-black-primary focus:ring-0">
            
            {{-- jumlah transfer --}}
            <label for="jumlah_transfer" class="mt-5 mb-2 font-medium">Jumlah Yang Ditransfer</label>
            @error('jumlah_transfer')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="number" name="jumlah_transfer" id="jumlah_transfer" required placeholder="Masukan Jumlah Yang Ditransfer" value="{{ old('jumlah_transfer', $pembayaran->jumlah_transfer) }}" class="w-full rounded-md focus:border-black-primary focus:ring-0">
            
            @if ($pembayaran->gambar_bukti_pembayaran)
                <img src="{{ asset('storage/' . $pembayaran->gambar_bukti_pembayaran) }}" class="img-preview w-56 mt-6 inline-block">
            @else
                <img src="" class="img-preview w-56 mt-6 inline-block">
            @endif

            {{-- UPLOAD bukti pembayaran --}}
            <label for="gambar_bukti_pembayaran" class="mt-2 mb-2 font-medium">Upload Bukti Gambar Pembayaran <br>(*max 1mb)</label>
            @error('gambar_bukti_pembayaran')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="file" name="gambar_bukti_pembayaran" id="gambar_bukti_pembayaran" onchange="previewImg()" placeholder="Masukan Jumlah Yang Ditransfer" value="{{ old('gambar_bukti_pembayaran', $pembayaran->gambar_bukti_pembayaran) }}" class="imageAdm w-[99px] bg-white text-white focus:border-black-primary focus:ring-0 overflow-hidden">
        
            <button type="submit" class="bg-black-primary w-full mt-7 py-2 rounded-md text-white">{{ ($pembayaran->status_pembayaran !== 1 ? 'Simpan' : 'Ubah') }}</button>
        </form>

        @if ($pembayaran->status_pembayaran !== 1)
            <div class="bg-yellow-primary py-3 px-3 text-white font-medium rounded-md">
                Setelah Anda melakukan pembayaran harap melakukan konfirmasi pembayaran. <span class="showForm border-b border-white md-800:cursor-pointer">Konfirmasi Pembayaran »</span>
            </div>
        @else
            <div class="bg-yellow-primary py-3 px-3 text-white font-medium rounded-md">
                Ubah data pembayaran jika terdapat kesalahan. <span class="showForm border-b border-white md-800:cursor-pointer">Ubah Data Pembayaran »</span>
            </div>
        @endif
    </div>

    @include('partials.footer')

    @include('partials.alert-ok-to-cart')
@endsection

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush

@push('form-pay')
    <script src="{{ asset('js/form-pay.js') }}"></script>
@endpush

@push('preview-image')
    <script src="{{ asset('js/preview-image.js') }}"></script>
@endpush

@push('script-alert-ok')
    <script src="{{ asset('js/script-alert-ok.js') }}"></script>
@endpush