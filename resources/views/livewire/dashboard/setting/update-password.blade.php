<div>
    <form wire:submit.prevent="updatePassword" autocomplete="off" class="w-full flex flex-col p-5">
        {{-- password saat ini --}}
        <label for="current_password" class="text-zinc-600 text-[14px] mb-1">Password Saat Ini</label>
        @error('state.current_password')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="password" id="current_password" minlength="8" maxlength="255" wire:model.lazy="state.current_password" required placeholder="Password Saat Ini" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        {{-- password baru --}}
        <label for="password" class="text-zinc-600 text-[14px] mt-7 mb-1">Password Baru</label>
        @error('state.password')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="password" id="password" minlength="8" maxlength="255" wire:model.lazy="state.password" required placeholder="Password Baru" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        {{-- konfirmasi password baru --}}
        <label for="password_confirmation" class="text-zinc-600 text-[14px] mt-7 mb-1">Konfirmasi Password Baru</label>
        @error('state.password_confirmation')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="password" id="password_confirmation" minlength="8" maxlength="255" wire:model.lazy="state.password_confirmation"
        required placeholder="Konfirmasi Password Baru" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        <div class="flex justify-end"><button type="submit" class="bg-zinc-50 border border-zinc-200 w-24 h-[35px] mt-5 rounded-md text-zinc-600 text-[14px]">Simpan</button></div>
    </form>

    @if (session()->has('okUpdatePassword'))

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