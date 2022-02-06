<x-guest-layout>
    <x-auth-card>

        <x-slot name="header">
            <h1 class="flex justify-center text-xl font-extrabold mb-2">Login</h1>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mb-2 w-full" type="email" name="email" :value="old('email')" required  placeholder="Masukan Email"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mb-2 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password"
                                placeholder="Masukan Password" />
            </div>

            <!-- Remember Me -->
            <div class="flex justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-sky-300 text-sky-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 lg:text-sm text-xs text-gray-600">{{ __('Ingat Saya') }}</span>
                </label>
                @if (Route::has('password.request'))
                <a class="lg:text-sm text-xs text-sky-600 hover:text-sky-800 focus:outline-none" href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
                @endif
            </div>


            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-3">
                    {{ __('Masuk') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
