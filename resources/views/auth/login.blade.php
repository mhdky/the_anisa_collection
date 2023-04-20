<x-guest-layout>
    <x-authentication-card>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- email --}}
            <div class="flex items-center border-b border-zinc-300">
                <i class="fas fa-at mr-1 text-zinc-400"></i>
                <x-input id="email" placeholder="Email" class="w-full flex-[2] text-sm outline-none border-transparent shadow-none focus:outline-none focus:border-transparent focus:ring-0 focus:border-none" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            {{-- password --}}
            <div class="mt-5 flex items-center border-b border-zinc-300">
                <i class="fas fa-lock mr-1 text-zinc-400"></i>
                <x-input id="password" placeholder="Password" class="w-full flex-[2] text-sm outline-none border-transparent shadow-none focus:outline-none focus:border-transparent focus:ring-0 focus:border-none" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-5">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-yellow-primary shadow-sm focus:ring-yellow-primary" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                </label>
            </div>

            <x-button class="mt-5">
                {{ __('Login') }}
            </x-button>

            <div class="flex items-center justify-center mt-4 pb-3 border-b border-zinc-300">
                @if (Route::has('password.request'))
                    <a class="text-red-500 text-sm" href="{{ route('password.request') }}">
                        {{ __('Lupa password') }}
                    </a>
                @endif
            </div>

            <p class="text-sm text-center mt-4">Belum punya akun? <a href="/register" class="text-yellow-primary">Daftar</a></p>
        </form>
    </x-authentication-card>
</x-guest-layout>
