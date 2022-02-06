<x-app-layout>

    <div class="bg-white shadow-lg relative overflow-hidden p-6">

        <form action="{{ route('surat', $employee->username) }}" method="post">
            @csrf
        <div class="flex flex-wrap">

            <div class="lg:w-1/2 w-full px-4 mb-3">
                <label for="" class="font-semibold">Nama Karyawan<span class="text-red-600">*</span></label>
                <x-input type="text" name="name" id="name" class="w-full bg-gray-50" :value="$employee->name" readonly />
            </div>

            <div class="lg:w-1/2 w-full px-4 mb-3">
                <label for="" class="font-semibold">Jabatan Karyawan<span class="text-red-600">*</span></label>
                <x-input type="text" name="jabatan" id="jabatan" class="w-full bg-gray-50" :value="$employee->job->title" readonly />
            </div>

            <div class="lg:w-1/2 w-full px-4 mb-3">
                <label for="alasan" class="font-semibold">Alasan<span class="text-red-600">*</span></label>
                <x-input type="text" name="alasan" id="alasan" class="w-full" :value="old('alasan')"  />
            </div>


            <div class="w-full px-4 mb-3">
                <label for="deskripsi" class="font-semibold">Penjelasan Lebih Lengkap<span class="text-red-600">*</span></label>
                <textarea type="text" name="deskripsi" id="deskripsi" class="rounded-lg border-gray-200 text-sm w-full focus:outline-none focus:ring-opacity-50 focus:ring-sky-300 focus:ring hover:scale-x-105 focus:scale-105 duration-105 hover:ring-sky-300 hover:ring duration-700"  >{{ old('deskripsi') }}</textarea>
            </div>

        </div>

        <div class="flex justify-between px-4">
            <x-back></x-back>
            <x-button>Kirim</x-button>
        </div>

    </form>

    </div>

</x-app-layout>
