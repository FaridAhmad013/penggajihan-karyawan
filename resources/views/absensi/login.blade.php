<x-guest-layout>
    <div class="flex justify-center h-screen items-center">
        <div class="bg-white shadow-lg rounded-lg w-4/12 p-6">
            <h3 class="text-center text-lg">Login Karyawan</h3>

            <form action="{{ route('absen-masuk') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="username" class="text-sm">Masukan Username</label>
                <x-input type="text" name="username" id="username" value="{{ old('username') }}" class="w-full" />
                @error('username')
                {{ $message }}
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="text-sm">Masukan Password</label>
                <x-input type="password" name="password" id="password" value="{{ old('password') }}" class="w-full"></x-input>
                @error('password')
                {{ $message }}
                @enderror
            </div>

            <x-button>Absen Masuk</x-button>

        </form>
        </div>
    </div>
</x-guest-layout>
