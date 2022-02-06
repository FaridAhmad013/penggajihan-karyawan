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
                    <x-input type="month" class="w-full lg:text-sm text-xs " name="month" id="month" required></x-input>
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

    @isset($salaries)

    <div class="flex justify-center mt-10 print:flex-none print:mt-0">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 lg:w-10/12 transform transition-all duration-1000">

            <div class="overflow-x-auto">

                <div class="mb-4 print:hidden">
                    <button onclick="return window.print()" class="lg:p-2 p-1 lg:text-sm text-xs bg-green-600 text-green-50 font-semibold hover:scale-90 duration-500 rounded-md">Cetak Laporan</button>
                </div>

                <div class="mb-4">
                    <h1 class="text-center font-extrabold lg:text-xl text-lg text-gray-700">
                        Nama Perusahaan
                        <div class="my-2 h-1 max-w-sm  bg-blue-500 rounded-lg" ></div>
                    </h1>
                    <ul class="leading-relaxed">
                        <li class="lg:text-sm text-xs lg:mb-2 mb-1">
                            Data : <span class="font-semibold text-gray-700 ">Laporan gaji karyawan</span>
                        </li>
                        <li class="lg:text-sm text-xs lg:mb-2 mb-1">Periode : <span class="font-semibold text-gray-700 ">{{ \Carbon\Carbon::parse(request()->month)->format('F Y') }}</span></li>
                    </ul>
                </div>


                <table class="table table-auto leading-relaxed" id="myTable">
                    <thead class="bg-gradient-to-r from-cyan-500 to-violet-700 text-white">
                        <tr>
                            <th class="px-4 py-2 print:font-bold print:text-black lg:text-sm text-xs">Tanggal Gajian</th>
                            <th class="px-4 py-2 print:font-bold print:text-black lg:text-sm text-xs">Nama Karyawan</th>
                            <th class="px-4 py-2 print:font-bold print:text-black lg:text-sm text-xs">Gaji Bersih</th>
                            <th class="px-4 py-2 print:font-bold print:text-black lg:text-sm text-xs">Gaji Kotor</th>
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
                            <td class="lg:text-base md:text-sm text-xs px-4 py-2">
                                <span class="p-1 bg-opacity-50 bg-green-500 text-green-50 print:text-black md:text-sm text-xs inline-flex">Rp. {{ number_format($gaji_bersih, 2, ',', ',') }}</span>
                            </td>
                            <td class="lg:text-base md:text-sm text-xs px-4 py-2">
                                <span class="p-1 bg-opacity-50 bg-lime-500 text-lime-50 print:text-black md:text-sm text-xs inline-flex">Rp. {{ number_format($gaji_kotor, 2, ',', ',') }}</span>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


        </div>
    </div>

    @endisset


    <script src="{{ asset('dataTable/print.js') }}" defer></script>

</x-app-layout>
