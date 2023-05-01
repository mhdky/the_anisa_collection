<div>
    <form wire:submit.prevent="update" autocomplete="off" class="w-full flex flex-col p-5">
        {{-- name --}}
        <label for="name" class="text-zinc-600 text-[14px] mb-1">Nama</label>
        @error('name')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="text" id="name" minlength="1" maxlength="30" wire:model="name" required placeholder="Nama" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
        {{-- email --}}
        <label for="email" class="text-zinc-600 text-[14px] mt-7 mb-1">Email</label>
        @error('email')
            <p class="text-red-500 text-[14px] mb-2">{{ $message }}</p>
        @enderror
        <input type="email" id="email" minlength="1" maxlength="30" wire:model="email" required placeholder="Email" class="bg-zinc-50 border-zinc-200 w-full h-[35px] rounded-md text-zinc-600 text-[14px] placeholder:text-zinc-600 focus:bg-zinc-100 focus:border-zinc-200 focus:ring-0">
        
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
