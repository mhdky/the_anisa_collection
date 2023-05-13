<div>
    <div class="w-full mb-20">
        <h1 class="text-xl font-medium border-b border-black pb-2">Account Information</h1>

        {{-- form account information --}}
        <div class="w-full flex justify-center mt-8">
            <form wire:submit.prevent="update" class="w-full flex flex-col">
                {{-- name --}}
                {{-- <p class="text-red-500 text-[14px]">error pesan tdisak ada</p> --}}
                <div class="w-full mb-6 px-2 pb-2 flex items-center border-b border-gray-300">
                    <i class="fas fa-user text-zinc-500"></i>
                    <input type="text" wire:model="name" required maxlength="50" placeholder="Your Name" class="w-full flex-[2] text-[14px] bg-transparent border-none focus:border-none focus:ring-0">
                </div>

                {{-- email --}}
                {{-- <p class="text-red-500 text-[14px]">error pesan tdisak ada</p> --}}
                <div class="w-full mb-6 px-2 pb-2 flex items-center border-b border-gray-300">
                    <i class="fas fa-at text-zinc-500"></i>
                    <input type="email" wire:model="email" required maxlength="200" placeholder="Your Email" class="w-full flex-[2] text-[14px] bg-transparent border-none focus:border-none focus:ring-0">
                </div>

                <button type="submit" class="bg-black-primary w-full py-2 rounded-md text-white mt-3">Update</button>
            </form>
        </div>
    </div>

    @if (session()->has('ok'))
        @include('partials.alert-ok-to-cart')

        <script>
            setTimeout(() => {
                const alertOk = document.querySelector('.alertOk');
                alertOk.classList.add('alertOkHide');
            }, 3000);
            setTimeout(() => {
                document.querySelector('.alertOk').style.display = 'none';
            }, 3400);
        </script>
    @endif
</div>
