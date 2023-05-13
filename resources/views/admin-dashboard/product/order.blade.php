@extends('layouts.admin-main')

@section('container')
    <div class="w-full mt-20 mb-52 flex-[2] md-900:px-4">
        @foreach ($orders as $order)
            <div class="{{ ($order->total_price == 0 ? 'hidden' : '') }} bg-zinc-50 w-full mb-5 p-3 border border-zinc-200 md-900:rounded-md">
                <div class="bg-zinc-200 w-full h-[1px] mb-3"></div>
                {{-- container card pesanan --}}
                @foreach ($order->order_detail as $orderDetail)
                    <div class="w-full mb-3 pb-3 flex border-b border-zinc-200">
                        {{-- image product --}}
                        <div class="w-[125px] h-[145px] mr-3">
                            <img src="{{ asset('storage/' . $orderDetail->product->image) }}" alt="{{ $orderDetail->product->name }}" class="w-full h-full object-cover">
                        </div>

                        <div class="flex-[2]">
                            {{-- product name --}}
                            <a href="/product/{{ $orderDetail->product->url }}" class="text-[18px] font-medium leading-6 md-1000:text-[16px]">{{ Str::title($orderDetail->product->name) }}</a>
                            
                            {{-- product size --}}
                            <div class="flex items-center mt-2">
                                <p class="text-[15px] font-medium w-20 md-1000:text-[14px]">Ukuran</p>
                                <p class="text-zinc-600 text-[14px] font-medium md-1000:text-[13px]">{{ $orderDetail->product->size }}</p>
                            </div>

                            {{-- product proce --}}
                            <div class="flex items-center mt-2">
                                <p class="text-[15px] font-medium w-20 md-1000:text-[14px]">Harga</p>
                                <p class="text-zinc-600 text-[14px] font-medium md-1000:text-[13px]">Rp. {{ number_format($orderDetail->product->price, '0', '', '.') }}</p>
                            </div>

                            {{-- product jmlah pesanan --}}
                            <div class="flex items-center mt-2">
                                <p class="text-[15px] font-medium w-20 md-1000:text-[14px]">Pesanan</p>
                                <p class="text-zinc-600 text-[14px] font-medium md-1000:text-[13px]">{{ number_format($orderDetail->total_order, '0', '', '.') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- dikirim / belum, dan nomor resi --}}
                <div class="mt-5 pb-5 border-b border-zinc-200">
                    {{-- dikirim / belum --}}
                    @if ($order->nomor_resi === null)
                        <p class="bg-red-500 w-max py-2 px-3 rounded-md text-white text-[14px] md-1000:text-[12px]">Belum Dikirim</p>
                    @else
                        <p class="bg-green-500 w-max py-2 px-3 rounded-md text-white text-[14px] md-1000:text-[12px]">Telah Dikirim</p>
                    @endif

                    {{-- nomor resi --}}
                    <form action="/dashboard/order/{{ $order->id }}" method="post" class="w-72 h-10 mt-3 flex justify-between items-center border border-black-primary p-2 rounded-md md-1000:h-9">
                        @csrf
                        @method('patch')

                        <input type="text" name="nomor_resi" placeholder="Kirim Nomor Resi" minlength="7" maxlength="20" required value="{{ old('nomor_resi', $order->nomor_resi) }}" class="bg-transparent h-full w-full mr-2 px-0 flex-[2] border-none text-[14px] focus:border-none focus:ring-0 md-1000:text-[12px]">
                        @if ($order->nomor_resi == 0)
                            <button type="submit" class="bg-black-primary py-1 px-5 text-white rounded-md text-[14px] md-1000:text-[12px]">Kirim</button>
                        @else
                            <button type="submit" class="bg-black-primary py-1 px-5 text-white rounded-md text-[14px] md-1000:text-[12px]" onclick="return confirm('Yakin ingin mengubah Nomor Resi Pembeli?')">Ubah</button>
                        @endif
                    </form>
                    @error('nomor_resi')
                        <p class="text-red-500 mt-1 text-[14px]">Nomor resi tidak boleh kosong</p>
                    @enderror
                </div>

                {{-- container sembunyikan dan tampilkan detail pemesanan --}}
                <div class="DetailOrder w-full hidden">
                    {{-- subtotal, ongkos kirim, dan total --}}
                    <div class="mt-5 pb-5 border-b border-zinc-200">
                        {{-- subtotal --}}
                        <div class="w-full mb-3 flex justify-between items-center sm-366:w-[340px]">
                            <p class="w-full flex-[2] font-medium md-1000:text-[14px]">Subtotal</p>
                            <p class="text-zinc-600 font-medium md-1000:text-[14px]">Rp. {{ number_format($order->total_price, '0', '', '.') }}</p>
                        </div>

                        {{-- ongkos kirim --}}
                        <div class="w-full mb-3 flex justify-between items-center sm-366:w-[340px]">
                            <p class="w-full flex-[2] font-medium md-1000:text-[14px]">Biaya Pengiriman (JNE REG)</p>
                            <p class="text-zinc-600 font-medium md-1000:text-[14px]">Rp. {{ number_format($order->ongkos_kirim_pembeli, '0', '', '.') }}</p>
                        </div>

                        {{-- total --}}
                        <div class="w-full mb-3 flex justify-between items-center sm-366:w-[340px]">
                            <p class="w-full flex-[2] font-medium md-1000:text-[14px]">Total</p>
                            <p class="text-yellow-primary font-medium md-1000:text-[14px]">Rp. {{ number_format($order->total_amount, '0', '', '.') }}</p>
                        </div>
                    </div>

                    {{-- detail pengiriman --}}
                    <div class="mt-5 pb-5 border-b border-zinc-200">
                        <h1 class="font-medium text-lg mb-4 md-1000:text-base">DETAIL PENGIRIMAN</h1>
                        {{-- nama --}}
                        <div class="mb-5 flex flex-col md-1000:flex-row">
                            <p class="w-40 mb-1 font-medium md-1000:text-[14px]">Nama Penerima</p>
                            <p class="w-full text-zinc-600 font-medium md-1000:text-[14px] flex-[2]">{{ Str::title($order->nama_pembeli) }}</p>
                        </div>

                        {{-- email --}}
                        <div class="mb-5 flex flex-col md-1000:flex-row">
                            <p class="w-40 mb-1 font-medium md-1000:text-[14px]">Email Penerima</p>
                            <p class="w-full text-zinc-600 font-medium md-1000:text-[14px] flex-[2]">{{ $order->email_pembeli }}</p>
                        </div>

                        {{-- nomor hp --}}
                        <div class="mb-5 flex flex-col md-1000:flex-row">
                            <p class="w-40 mb-1 font-medium md-1000:text-[14px]">Handphone</p>
                            <p class="w-full text-zinc-600 font-medium md-1000:text-[14px] flex-[2]">{{ $order->nohp_pembeli }}</p>
                        </div>

                        {{-- alamat --}}
                        <div class="mb-5 flex flex-col md-1000:flex-row">
                            <p class="w-40 mb-1 font-medium md-1000:text-[14px]">Alamat</p>
                            <p class="w-full text-zinc-600 font-medium md-1000:text-[14px] flex-[2]">{{ Str::upper($order->kecamatan_pembeli . ', ' . $order->kota_pembeli . ', ' . $order->provinsi_pembeli) . ', ' . $order->kode_pos_pembeli }}</p>
                        </div>

                        {{-- Alamat lengkap --}}
                        <div class="mb-5 flex flex-col md-1000:flex-row">
                            <p class="w-40 mb-1 font-medium md-1000:text-[14px]">Alamat Lengkap</p>
                            <p class="w-full text-zinc-600 font-medium md-1000:text-[14px] flex-[2]">{{ Str::upper($order->alamat_pembeli) }}</p>
                        </div>

                        {{-- Pesan --}}
                        <div class="w-72 flex flex-col">
                            <p class="w-40 mb-1 font-medium md-1000:text-[14px]">Pesan</p>
                            <p class="w-full text-zinc-600 font-medium md-1000:text-[14px] flex-[2]">{{ $order->pesan_pembeli }}</p>
                        </div>
                    </div>

                    {{-- Bukti pembayaran --}}
                    <div class="mt-5 pb-5 border-b border-zinc-200">
                        <h1 class="font-medium text-lg mb-4 md-1000:text-base">BUKTI PEMBAYARAN</h1>
                        {{-- nama --}}
                        <div class="w-full flex">
                            {{-- gambar bukti pembayaran --}}
                            <div class="w-[150px] h-max mr-3 md-800:cursor-pointer">
                                <img src="{{ asset('storage/' . $order->gambar_bukti_pembayaran) }}" class="bukaGambarPembayaran w-full h-max">
                            </div>
                            
                            <div class="flex-[2]">
                                {{-- tanggal pembayaran --}}
                                <div class="mb-3 md-1000:flex">
                                    <p class="font-medium mb-1 md-1000:text-[14px] md-1000:w-52">Tanggal Pembayaran</p>
                                    <p class="text-zinc-600 font-medium md-1000:text-[14px]">{{ (Carbon\Carbon::parse($order->tanggal_pembayaran)->translatedFormat('d F, Y')) }}</p>
                                </div>

                                {{-- tanggal pemesanan --}}
                                <div class="mb-3 md-1000:flex">
                                    <p class="font-medium mb-1 md-1000:text-[14px] md-1000:w-52">Tanggal Pemesanan</p>
                                    <p class="text-zinc-600 font-medium md-1000:text-[14px]">{{ (Carbon\Carbon::parse($order->pemesanan)->translatedFormat('d F, Y H:i')) }} WIB</p>
                                </div>

                                {{-- nama akun --}}
                                <div class="mb-3 md-1000:flex">
                                    <p class="font-medium mb-1 md-1000:text-[14px] md-1000:w-52">Nama Akun Bank</p>
                                    <p class="text-zinc-600 font-medium md-1000:text-[14px]">{{ Str::upper($order->nama_akun_bank) }}</p>
                                </div>

                                {{-- nama bank --}}
                                <div class="mb-3 md-1000:flex">
                                    <p class="font-medium mb-1 md-1000:text-[14px] md-1000:w-52">Nama Bank</p>
                                    <p class="text-zinc-600 font-medium md-1000:text-[14px]">{{ Str::upper($order->nama_bank) }}</p>
                                </div>

                                {{-- Jumlah Transfer --}}
                                <div class="mb-3 md-1000:flex">
                                    <p class="font-medium mb-1 md-1000:text-[14px] md-1000:w-52">Jumlah Transfer</p>
                                    <p class="text-zinc-600 font-medium md-1000:text-[14px]">Rp. {{ number_format($order->jumlah_transfer, '0', '', '.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="ShowDetailOrder mt-5 pb-5 border-b border-zinc-200 font-medium md-1000:text-[14px] md-800:cursor-pointer">Lihat Detail Pemesanan..</p>
                <p class="hideDetailOrder hidden mt-5 pb-5 border-b border-zinc-200 font-medium md-1000:text-[14px] md-800:cursor-pointer">Tutup Detail Pembelian..</p>
            </div>
        @endforeach

        @if ($orders->count() < 1)
            <div class="w-full h-screen flex justify-center text-[15px] font-medium">Tidak Ada Pemesaanan Saat Ini</div>
        @endif
    </div>

    @foreach ($orders as $order)
        <div class="gambarPembayaran bg-[#00000083] w-full fixed z-40 top-0 right-0 bottom-0 left-0 hidden justify-center items-center overflow-auto">
            <div class="bg-white w-full h-screen p-4 overflow-auto border border-zinc-200 sm-423:w-[300px] sm-423:mx-auto md-768:h-max md-768:rounded-md">
                {{-- close gambar bukti pembayaran --}}
                <div class="w-full  mb-5 flex justify-between items-center">
                    <h1 class="font-medium">{{ Str::upper('muhammad rizki') }}</h1>
                    <div class="tutupGambarPembayaran bg-zinc-50 w-8 h-8 rounded-full border border-zinc-200 flex justify-center items-center md-800:cursor-pointer"><i class="fas fa-times"></i></div>
                </div>

                {{-- zoom gambar pembayaran --}}
                <div class="w-full">
                    <img src="{{ asset('storage/' . $order->gambar_bukti_pembayaran) }}" class="w-full">
                </div>
            </div>
        </div>
    @endforeach

    @include('partials.alert-ok-to-cart')
@endsection

@push('nav-admin')
    <script src="{{ asset('js/nav-admin.js') }}"></script>
@endpush

@push('detail-order')
    <script src="{{ asset('js/detail-order.js') }}"></script>
@endpush

@push('script-alert-ok')
    <script src="{{ asset('js/script-alert-ok.js') }}"></script>
@endpush