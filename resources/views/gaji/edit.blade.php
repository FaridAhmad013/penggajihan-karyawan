<x-app-layout>
    <x-slot name="title">Edit</x-slot>

    <div class="bg-white shadow-lg rounded-lg relative p-6">

        <form action="{{ route('salary.update', $salary->id) }}" method="post">
            @csrf
            @method('put')
            <div class="flex flex-wrap">
                <div class="lg:w-1/2 mb-3 px-4 w-full">
                    <label for="">Nama Karyawan<span class="text-red-600">*</span></label>
                    <x-input type="text" class="w-full bg-gray-50" :value="$salary->employee->name" name="name" readonly></x-input>
                </div>
                <div class="lg:w-1/2 mb-3 px-4 w-full">
                    <label for="">Jabatan<span class="text-red-600">*</span></label>
                    <x-input type="text" class="w-full bg-gray-50" :value="$salary->employee->job->title" readonly></x-input>
                </div>
                <div class="lg:w-1/2 mb-3 px-4 w-full">
                    <label for="">Status Gaji<span class="text-red-600">*</span></label>
                    <select name="status" id="status" class="rounded-lg w-full border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 focus:ring-opacity-50 hover:ring hover:ring-sky-300 duration-700" required>
                        <option value="">Pilih Status</option>
                        <option value="0" {{ $salary->status == 0? 'selected' : '' }}>Belum Dikonfirmasi</option>
                        <option value="1" {{ $salary->status == 1? 'selected' : '' }}>Sudah Dikonfirmasi</option>
                    </select>
                </div>
            </div>

            <div class="flex justify-between px-4">
                <x-back></x-back>
                <x-button>Ubah Status</x-button>
            </div>

        </form>


    </div>
</x-app-layout>
