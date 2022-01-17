<x-app-layout>

    <x-slot name="title">Kirim Gaji ( {{ $employee->name }} )</x-slot>
    <x-slot name="header">
        <h2
            class="font-extrabold text-2xl inline-flex bg-gradient-to-r from-cyan-600 via-white to-sky-700 text-transparent bg-clip-text">
            {{ __('Halaman Penggajiah Karyawan') }}
        </h2>

    </x-slot>


    <form action="{{ route('employee-salary.store', $employee->username) }}" method="post">
        @csrf
        <div class="flex justify-center">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden lg:w-8/12 p-6">

                <div class="border-b-2 border-cyan-600 mb-4">
                    <h2 class="font-semibold text-lg text-center text-gray-900 mb-3">Identitas Karyawan</h2>

                    <div class="mb-2 flex items-center justify-between">
                        <label for="" class="w-5/12 text-gray-700">Nama Karyawan</label>
                        <p class="w-7/12 text-gray-700 font-semibold">{{ $employee->name }}</p>
                    </div>

                    <div class="mb-2 flex items-center justify-between">
                        <label for="" class="w-5/12 text-gray-700">Jabatan Karyawan</label>
                        <p class="w-7/12 text-gray-700 font-semibold">{{ $employee->job->title }}</p>
                    </div>

                    <div class="mb-2 flex items-center justify-between">
                        <label for="" class="w-5/12 text-gray-700">Status</label>
                        <p class="w-7/12 text-gray-700 font-semibold">Karyawan {{ $employee->status }}</p>
                    </div>

                </div>

                <div class="">
                    <h2 class="text-center text-gray-900 font-semibold text-lg">Form Penggajihan</h2>

                    <div class="mb-3">
                        <label for="bonus" class="block text-gray-700 text-sm lg:text-base">Bonus Gaji</label>
                        <x-input type="number" name="bonus" id="bonus" class="w-full" min="0" value="0" />
                        @error('bonus')
                        <span class="text-xs text-rose-400 italic">
                            {{ $message }}
                        </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="transportation_allowance">Tunjangan Transportasi</label>
                        <x-input name="transportation_allowance" type="number" id="transportation_allowance" class="w-full" min="0" value="0"></x-input>
                        @error('transportation_allowance')
                        <span class="text-xs text-rose-400 italic">
                            {{ $message }}
                        </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="achievement_allowance">Tunjangan Prestasi</label>
                        <x-input name="achievement_allowance" type="number" id="achievement_allowance" class="w-full" min="0" value="0"></x-input>
                        @error('achievement_allowance')
                        <span class="text-xs text-rose-400 italic">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="insurance_deduction">Potongan BPJS</label>
                        <x-input name="insurance_deduction" type="number" id="insurance_deduction" class="w-full" min="0" value="0"></x-input>
                        @error('insurance_deduction')
                        <span class="text-xs text-rose-400 italic">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="college_deduction">Potongan Kuliah</label>
                        <x-input name="college_deduction" type="number" id="college_deduction" class="w-full" min="0" value="0"></x-input>
                        @error('college_deduction')
                        <span class="text-xs text-rose-400 italic">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    
                <x-button>Kirim Gaji</x-button>
            </div>
        </div>
    </form>


</x-app-layout>
