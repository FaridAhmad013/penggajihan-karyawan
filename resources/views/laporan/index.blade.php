<x-app-layout>
    <x-slot name="title">Laporan Gaji</x-slot>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl inline-flex bg-gradient-to-r from-cyan-600 via-white to-sky-700 text-transparent bg-clip-text mb-4">
            {{ __('Halaman Rekap Gaji Karyawan') }}
        </h2>

        <div class="p-6 border">

            <form action="{{ route('report') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="month" class="text-sky-50 font-semibold">Pilih Bulan dan Tahun</label>
                    <x-input type="month" class="w-full" name="month" id="month" required></x-input>
                    @error('month')
                    <span class="text-xs text-rose-400 italic">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <x-button>Pilih Rekap Gaji</x-button>
            </form>

        </div>

    </x-slot>

    {{-- <div class="relative -mt-11">
        <div class="flex flex-wrap">

            <div class="lg:w-4/12 md:w-4/12 sm:w-6/12 w-full">

                <x-card-header :title="'Tunjangan'" :link="'#'" :value="$allowances->count()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="lg:h-16 h-10" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                      </svg>
                </x-card-header>

            </div>



        </div>
    </div> --}}

    @isset($salaries)

    <div class="flex justify-center mt-10 print:flex-none print:mt-0">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 lg:w-10/12">

            <div class="mb-4 print:hidden">
                <button onclick="return window.print()" class="p-2 bg-green-600 text-green-50">Cetak Laporan</button>
            </div>

            <div class="mb-4">
                <h1 class="text-center font-extrabold text-xl text-gray-700">Nama Perusahaan</h1>
                <ul class="leading-relaxed">
                    <li>
                        Data : <span class="font-semibold text-gray-700 text-sm">Laporan gaji karyawan</span>
                    </li>
                    <li>Periode : <span class="font-semibold text-gray-700 text-sm">{{ \Carbon\Carbon::parse(request()->month)->format('F Y') }}</span></li>
                </ul>
            </div>


            <table class="table table-auto leading-relaxed" id="myTable">
                <thead class="bg-gradient-to-r from-cyan-500 to-violet-700 text-white">
                    <tr>
                        <th class="px-4 py-2 print:font-bold print:text-black lg:text-base text-sm">Tanggal Gajian</th>
                        <th class="px-4 py-2 print:font-bold print:text-black lg:text-base text-sm">Nama Karyawan</th>
                        <th class="px-4 py-2 print:font-bold print:text-black lg:text-base text-sm">Gaji Bersih</th>
                        <th class="px-4 py-2 print:font-bold print:text-black lg:text-base text-sm">Gaji Kotor</th>
                    </tr>
                </thead>
                <tbody class="leading-relaxed font-sans">
                    @foreach ($salaries as $salary)
                    <tr class="bg-yellow-50">
                        @php
                            $gaji_kotor = $salary->employee->basic_salary + ($salary->achievement_allowance + $salary->bonus + $salary->transportation_allowance + $salary->overtime + $salary->education_allowance);
                            $gaji_bersih = $gaji_kotor - ($salary->pension - $salary->college_deduction - $salary->insurance_deduction);
                            $total = 0;
                            $total += $gaji_bersih;
                        @endphp
                        <td class="lg:text-base md:text-sm text-xs px-4 py-2">{{ \Carbon\Carbon::parse($salary->created_at)->format('d F Y') }}</td>
                        <td class="lg:text-base md:text-sm text-xs px-4 py-2">{{ $salary->employee->name }}</td>
                        <td class="lg:text-base md:text-sm text-xs px-4 py-2"><span class="p-1 bg-opacity-50 bg-green-500 text-green-50 print:text-black md:text-sm text-xs ">Rp. {{ number_format($gaji_bersih, 2, ',', ',') }}</span></td>
                        <td class="lg:text-base md:text-sm text-xs px-4 py-2"><span class="p-1 bg-opacity-50 bg-lime-500 text-lime-50 print:text-black md:text-sm text-xs ">Rp. {{ number_format($gaji_kotor, 2, ',', ',') }}</span></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    @endisset


    <script src="{{ asset('dataTable/print.js') }}" defer></script>

</x-app-layout>
