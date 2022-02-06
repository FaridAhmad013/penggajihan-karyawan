<x-app-layout>
    <x-slot name="title">Tambah Jabatan</x-slot>
    <div class="flex justify-center">

        <div class="bg-white shadow-lg rounded-lg lg:w-6/12 md:w-8/12 sm:w-10/12 w-full p-6 transition-all transform duration-1000" >
            <h2 class="text-center font-semibold text-gray-700 mb-3">Tambah Jabatan</h2>

            <form action="{{ route('job.store') }}" method="post" id="submit">
            @csrf
            <div class="mb-4">
                <label for="title" class="block lg:text-base text-sm text-gray-700">Masukan Nama Jabatan</label>
                <x-input type="text" name="title" placeholder="Masukan Nama Jabatan" id="title" class="text-sm w-full"/>
                @error('title')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="subsidy" class="block lg:text-base text-sm text-gray-700">Masukan Tunjangan Jabatan</label>
                <x-input type="number" name="subsidy" id="subsidy"  placeholder="Masukan Tunjangan Jabatan"  class="w-full text-sm" />
                <span id="rupiah">

                </span>
                @error('subsidy')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="flex justify-end">
            <x-button id="buttonJabatan">Tambah Jabatan</x-button>
            </div>
        </form>

        </div>

    </div>

    <script src="{{ asset('pages/jabatan/create.js') }}" defer></script>
</x-app-layout>

