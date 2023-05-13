<div>
    <div class="w-full mb-20">
        <h1 class="text-xl font-medium border-b border-black pb-2">Change Password</h1>

        {{-- form change password --}}
        <div class="w-full flex justify-center mt-8">
            <form wire:submit.prevent="updatePassword" class="w-full flex flex-col">
                {{-- password lama --}}
                @error('state.current_password')
                    <p class="text-red-500 text-[14px]">{{ $message }}</p>
                @enderror
                <div class="w-full mb-6 px-2 pb-2 flex items-center border-b border-gray-300">
                    <i class="fas fa-lock text-zinc-500"></i>
                    <input type="password" wire:model.lazy="state.current_password" required maxlength="255" placeholder="Current Password" class="w-full flex-[2] text-[14px] bg-transparent border-none focus:border-none focus:ring-0">
                </div>

                {{-- password baru --}}
                @error('state.password')
                    <p class="text-red-500 text-[14px]">{{ $message }}</p>
                @enderror
                <div class="w-full mb-6 px-2 pb-2 flex items-center border-b border-gray-300">
                    <i class="fas fa-lock text-zinc-500"></i>
                    <input type="password" wire:model.lazy="state.password" required minlength="8" maxlength="255" placeholder="New Password" class="w-full flex-[2] text-[14px] bg-transparent border-none focus:border-none focus:ring-0">
                </div>

                {{-- konfirmasi password baru --}}
                @error('state.password_confirmation')
                    <p class="text-red-500 text-[14px]">{{ $message }}</p>
                @enderror
                <div class="w-full mb-6 px-2 pb-2 flex items-center border-b border-gray-300">
                    <i class="fas fa-lock text-zinc-500"></i>
                    <input type="password" wire:model.lazy="state.password_confirmation" required minlength="8" maxlength="255" placeholder="Confirm New Password" class="w-full flex-[2] text-[14px] bg-transparent border-none focus:border-none focus:ring-0">
                </div>

                <button type="submit" class="btnSubmit bg-black-primary w-full py-2 rounded-md text-white mt-3">Update</button>
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
