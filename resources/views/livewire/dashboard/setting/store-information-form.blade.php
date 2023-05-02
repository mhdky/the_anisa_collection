<div>
    <form wire:submit.prevent="updateStore" autocomplete="off" class="w-full flex flex-col p-5">
        {{-- store_address --}}
        <label for="store_address" class="text-zinc-600 text-[14px] mb-1">Alamat Toko</label>
        @error('store_address')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="text" id="store_address" minlength="3" maxlength="255" wire:model="store_address" required placeholder="Alamat Toko" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        {{-- phone_number --}}
        <label for="phone_number" class="text-zinc-600 text-[14px] mt-7 mb-1">Nomor Pelayanan Pengguna</label>
        @error('phone_number')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="tel" id="phone_number" minlength="3" maxlength="30" wire:model="phone_number" required placeholder="Kontak Pelayanan Pengguna" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        {{-- store_email --}}
        <label for="store_email" class="text-zinc-600 text-[14px] mt-7 mb-1">Alamat Email Toko</label>
        @error('store_email')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="text" id="store_email" minlength="3" maxlength="255" wire:model="store_email" required placeholder="Alamat Email Toko" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        {{-- instagram --}}
        <label for="instagram" class="text-zinc-600 text-[14px] mt-7 mb-1">Link Instagram</label>
        @error('instagram')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="url" id="instagram" maxlength="255" wire:model="instagram" placeholder="Link Instagram" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        {{-- facebook --}}
        <label for="facebook" class="text-zinc-600 text-[14px] mt-7 mb-1">Link Facebook</label>
        @error('facebook')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="url" id="facebook" maxlength="255" wire:model="facebook" placeholder="Link Facebook" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        {{-- open --}}
        <label for="open" class="text-zinc-600 text-[14px] mt-7 mb-1">Jam Toko Buka</label>
        @error('open')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="text" id="open" maxlength="5" wire:model="open" placeholder="Jam Toko Buka" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        {{-- close --}}
        <label for="close" class="text-zinc-600 text-[14px] mt-7 mb-1">Jam Toko Tutup</label>
        @error('close')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="text" id="close" maxlength="5" wire:model="close" placeholder="Jam Toko Tutup" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        <div class="flex justify-end"><button type="submit" class="bg-zinc-50 border border-zinc-200 w-24 h-[35px] mt-5 rounded-md text-zinc-600 text-[14px]">Simpan</button></div>
    </form>

    @if (session()->has('ok'))

        @include('partials.dashboard.alert-ok')

        <script>
            const alertOk = document.querySelector('.alertOk');
            setTimeout(() => {
                alertOk.style.transform = 'translateY(0)';
            }, 100);
            setTimeout(() => {
                alertOk.style.transform = 'translateY(100%)';
            }, 5000);
        </script>
    @endif
</div>