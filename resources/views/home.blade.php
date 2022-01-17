<x-guest-layout>

    <x-slot name="header">
        <div class="">
            <h2 class="font-extrabold text-2xl inline-flex bg-gradient-to-r from-cyan-600 via-white to-sky-700 text-transparent bg-clip-text">
                {{ __('Halaman Karyawan') }}
            </h2>
            <p class="leading-relaxed text-sky-50 font-sans text-base">
                Ini merupakan halaman untuk karyawan jika ingin absen masuk dan absen keluar
            </p>
        </div>
    </x-slot>

    <div class="relative -mt-6">
        <div class="flex flex-wrap justify-between">

            <div class="lg:w-3/12 md:w-4/12 sm:w-6/12 w-full">

                <div class="bg-gray-50 shadow-lg p-6 text-gray-600">
                    <a href="{{ route('absen-masuk') }}" class="flex justify-between items-center pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-12 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        <h2 class="font-semibold lg:text-2xl">Absen Masuk</h2>
                    </a>

                    <a href="{{ route('absen-masuk') }}" class="flex p-2 bg-sky-600 text-sky-50">
                        Absen Sekarang
                    </a>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                      </svg> --}}
                </div>

            </div>

        </.>
    </div>
    {{-- <div class="flex justify-center mt-10">
        <div class="bg-white shadow-lg rounded-lg p-6">



        </div>
    </div> --}}

</x-guest-layout>
