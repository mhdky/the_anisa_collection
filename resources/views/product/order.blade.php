@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <div class="w-full mt-[65px] py-4 md-768:mt-7 mb-[70vh]">
        @foreach ($orders as $order)
            <div class="{{ ($order->total_price == 0 ? 'hidden' : '') }} bg-zinc-50 w-full mb-5 px-4 pb-3 shadow-sm border border-zinc-200 rounded-md lg-1100:w-[1070px] lg-1100:mx-auto lg-1100:pb-4 lg-1100:px-5 lg-1100:pt-3">
                {{-- line --}}
                <span class="bg-zinc-200 w-full h-[1px] mb-1 inline-block"></span>

                {{-- container product --}}
                <div class="w-full overflow-auto">
                    @foreach ($order->order_detail as $orderDetail)
                        <div class="w-max flex justify-between items-center border-b pb-3 mb-3 border-zinc-200 md-768:w-full">
                            {{-- gambar dan keterangan produk  --}}
                            <div class="w-[350px] mr-10 flex items-center sm-500:w-[450px] sm-601:w-[600px] sm-740:w-[700px] md-768:w-[600px]">
                                {{-- gambar produk --}}
                                <div class="bg-zinc-500 w-28 h-28 mr-3">
                                    <img src="{{ 'storage/' . $orderDetail->product->image }}" alt="{{ $orderDetail->product->name }}" class="w-full h-full object-cover inline-block">
                                </div>

                                {{-- keterangan produk --}}
                                <div class="flex-[2]">
                                    {{-- judul produk --}}
                                    <a href="/product/{{ $orderDetail->product->url }}" class="flex-[2] leading-5 font-medium">{{ Str::title($orderDetail->product->name) }}</a>
                                    {{-- ukuran produk --}}
                                    <p class="text-zinc-600 mt-1 text-[14px]">Fit Size {{ $orderDetail->product->size }}</p>
                                    <p class="text-zinc-600 mt-1 text-[14px]">Rp. {{ number_format($orderDetail->product->price, '0', '', '.') }} x {{ $orderDetail->total_order }}</p>
                                </div>
                            </div>

                            {{-- subtotal --}}
                            <h3 class="text-zinc-600 text-[14px] font-medium">Rp. {{ number_format($orderDetail->total_price, '0', '', '.') }}</h3>
                        </div>
                    @endforeach
                </div>

                <div class="bg-zinc-50 w-full pb-4">
                    {{-- keterangan bayar belum --}}
                    @if ($order->status_pembayaran !== 1)
                        <div class="flex items-center">
                            <i class="fa-regular fa-circle-xmark text-red-500 mb-0.5"></i>
                            <p class="text-red-500 font-bold ml-2 rounded-md md-768:text-[14px]">Belum Dibayar</p>
                        </div>
                    @else
                        <div class="flex items-center">
                            <i class="fa-solid fa-circle-check text-green-500"></i>
                            <p class="text-green-500 font-bold ml-2 rounded-md md-768:text-[14px]">Sudah Dibayar</p>
                        </div>
                    @endif

                    {{-- menunggu order --}}
                    @if ($order->nomor_resi === null && $order->status_pembayaran !== 0)
                        <div class="flex items-center mt-4">
                            <i class="fas fa-spinner mr-2"></i>
                            <p class="text-[14px] font-medium">Menunggu Nomor Resi</p>
                        </div>           
                    @endif

                    {{-- nomor resi --}}
                    @if ($order->nomor_resi !== null)
                        <div class="w-max mt-6">
                            <p class="font-medium text-[14px] mb-2">Nomor Resi</p>
                            <div class="w-full flex justify-between">
                                <p class="nomorResi bg-zinc-200 w-max py-1 px-2 border border-zinc-300 rounded-tl-md rounded-bl-md flax-[2] text-[14px]">{{ $order->nomor_resi }}</p>
                                <div class="copyResi w-8 h-8 flex justify-center items-center bg-zinc-200 border border-zinc-300 rounded-tr-md rounded-br-md md-800:cursor-pointer">
                                    <i class="fa-solid fa-clone text-zinc-600 text-[12px]"></i>
                                </div>
                                {{-- notif copyResi --}}
                                <div class="alertResi w-8 h-8 hidden justify-center items-center">
                                    <img src="{{ asset('img/checklist.png') }}" alt="checklist" class="w-4">
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- subtotal --}}
                    <div class="w-full mt-6 flex justify-between items-center">
                        <h3 class="font-medium md-768:text-[14px]">Subtotal</h3>
                        <p class="text-zinc-600 font-medium md-768:text-[14px]">Rp. {{ number_format($order->total_price, '0', '', '.') }}</p>
                    </div>

                    {{-- biaya pengiriman --}}
                    <div class="w-full mt-4 flex justify-between items-center">
                        <h3 class="font-medium md-768:text-[14px]">Biaya Pengiriman (JNE REG)</h3>
                        <p class="text-zinc-600 font-medium md-768:text-[14px]">Rp. {{ number_format($order->ongkos_kirim_pembeli, '0', '', '.') }}</p>
                    </div>

                    {{-- total --}}
                    <div class="w-full mt-4 flex justify-between items-center">
                        <h3 class="font-medium md-768:text-[14px]">Total</h3>
                        <p class="text-yellow-primary font-bold md-768:text-[14px]">Rp. {{ number_format($order->total_amount, '0', '', '.') }}</p>
                    </div>


                    @if ($order->status_pembayaran !== 1)
                        <p class="bg-zinc-200 w-full mt-5 py-2 text-zinc-600 text-[15px] text-center font-medium border border-zinc-300 rounded-md select-none md-800:cursor-pointer" onclick="window.location='/pay/{{ $order->url_pembayaran }}'">Bayar Sekarang</p>
                    @else
                        <p class="bg-zinc-200 w-full mt-5 py-2 text-zinc-600 text-[15px] text-center font-medium border border-zinc-300 rounded-md select-none md-800:cursor-pointer" onclick="window.location='/pay/{{ $order->url_pembayaran }}'">Detail Pembayaran</p>
                    @endif

                    <p class="text-zinc-600 font-medium mt-7">Detail Pengiriman..</p>
                    
                    {{-- container detail pengriman --}}
                    <div class="w-full mt-5">
                        <div class="w-full flex items-center">
                            <div class="border-r border-zinc-400 pr-2">
                                {{-- nama pembeli --}}
                                <h2 class="text-[14px] max-w-[170px] overflow-auto sm-423:max-w-[230px] sm-500:max-w-[300px]">{{ Str::title($order->nama_pembeli) }}</h2>
                                {{-- email pembeli --}}
                                <h3 class="text-[14px] text-zinc-600 max-w-[170px] overflow-auto sm-423:max-w-[230px] sm-500:max-w-[300px]">{{ $order->email_pembeli }}</h3>
                            </div>

                            {{-- no hp pembeli --}}
                            <p class="text-zinc-600 text-[14px] pl-2">{{ $order->nohp_pembeli }}</p>
                        </div>

                        {{-- alamat lengkap pembeli --}}
                        <p class="text-[14px] font-medium my-4 overflow-auto">{{ Str::title($order->alamat_pembeli) }}</p>

                        {{-- alamat pengiriman pembeli --}}
                        <p class="text-[14px] font-medium overflow-auto">{{ Str::upper($order->kecamatan_pembeli) . ', ' . Str::upper($order->kota_pembeli) . ', ' . Str::upper($order->provinsi_pembeli) . ', ' . Str::upper($order->kode_pos_pembeli) }}</p>
                    </div>
                </div>
            </div>
        @endforeach

        @if ($orders->count() < 1)
            <div class="w-full h-96 flex justify-center items-center px-2 text-lg font-medium">
                Order Nothing Yet
            </div>
        @endif
    </div>

    @include('partials.footer')
@endsection

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush
@push('script')
    <script src="{{ asset('js/copy.js') }}"></script>
@endpush