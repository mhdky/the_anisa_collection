<div class="bg-black-primary w-full flex flex-col justify-center mt-10 px-5 pt-10 pb-3 lg-1100:px-0 lg:items-center">
    {{-- footer list --}}
    <div class="w-full flex flex-col md-768:flex-row md-768:justify-between lg-1100:w-[1070px]">
        {{-- logo --}}
        <ul class="mb-5">
            <li class="mb-1"><a href="/" class="text-yellow-primary text-2xl font-playfair font-bold md-880:text-3xl">Anisa Collection</a></li>
            <li class="text-white text-xl font-playfair font-bold">Live For Fashion</li>
        </ul>

        {{-- temukan kami --}}
        <ul class="mb-5 md-768:mt-2">
            <li class="text-white text-lg mb-6">Temukan Kami</li>
            <li class="mb-5"><a href="{{ ($storeInformation->instagram == NULL ? '#' : $storeInformation->instagram) }}" class="text-gray-primary hover:text-white">Instagram</a></li>
            <li class="mb-5"><a href="{{ ($storeInformation->facebook == NULL ? '#' : $storeInformation->facebook) }}" class="text-gray-primary hover:text-white">Facebook</a></li>
            <li class="mb-5" onclick="window.location='https:{{ '/'.'/' }}wa.me/{{ $storeInformation->phone_number }}/?text=Hallo, apakah produk masih tersedia?'"><div class="text-gray-primary hover:text-white md-800:cursor-pointer">Whatsapp</div></li>
        </ul>

        {{-- toko --}}
        <ul class="mb-5 md-768:mt-2">
            <li class="text-white text-lg mb-6">Toko</li>
            <li class="mb-5"><a href="/about" class="text-gray-primary hover:text-white">Tentang</a></li>
            <li class="mb-5"><div href="/kontak" class="text-gray-primary hover:text-white md-800:cursor-pointer" onclick="window.location='https:{{ '/'.'/' }}wa.me/{{ $storeInformation->phone_number }}/?text=Hallo, apakah produk masih tersedia?'">Kontak</div></li>
        </ul>

        {{-- kami selalu ada --}}
        <ul class="mb-5 md-768:mt2">
            <li class="text-white text-lg mb-6">Kami Selalu Ada</li>
            <li class="mb-5"><a href="mailto:{{ $storeInformation->store_email }}" class="text-gray-primary hover:text-white">{{ $storeInformation->store_email }}</a></li>
            <li class="text-gray-primary mb-5">Jam Kerja:</li>
            <li class="text-gray-primary mb-5">({{ $storeInformation->open }} - {{ $storeInformation->close }} WIB)</li>
        </ul>
    </div>

    {{-- copyright --}}
    <p class="text-[#727272] text-[0.8rem] text-center mt-5">© {{ now()->year }} ANISA COLLECTION | All Right Reversed</p>
</div>