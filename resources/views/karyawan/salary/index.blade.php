<x-app-layout>
    <x-slot name="title">Gaji ( {{ $employee->name }} )</x-slot>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl inline-flex bg-gradient-to-r from-cyan-600 via-white to-sky-700 text-transparent bg-clip-text">
            {{ __('Rekap Gaji : ').$employee->name }}
        </h2>
        <div class="flex justify-end">
            <a href="{{ route('employee-salary.create', $employee->username) }}" class="bg-sky-500 text-sky-50 text-base px-3 py-2 transform hover:scale-90 duration-700">Beri Gaji</a>
            </div>
    </x-slot>

    <div class="flex justify-center">
        <div class="bg-white shadow-lg p-6 lg:w-8/12 md:w-10/12 w-full transition-all duration-1000">


            <table class="table leading-relaxed" id="myTable">
                <thead class="bg-gradient-to-r from-teal-500 to-sky-600 px-3 py-2 text-white print:font-semibold print:text-black">
                    <tr>
                        <th scope="col" class="lg:px-4 px-2 py-2 lg:text-sm md:text-sm text-xs print:border-b-2">Tanggal</th>
                        <th scope="col" class="lg:px-4 px-2 py-2 lg:text-sm md:text-sm text-xs print:border-b-2">Gaji Bersih</th>
                        <th scope="col" class="lg:px-4 px-2 py-2 lg:text-sm md:text-sm text-xs print:border-b-2">Gaji Kotor</th>
                        <th scope="col" class="lg:px-4 px-2 py-2 lg:text-sm md:text-sm text-xs print:hidden">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salaries as $salary)
                    <tr class="odd:bg-green-50">

                        @php
                            $gaji_kotor = $salary->employee->basic_salary + $salary->transportation_allowance + $salary->achievement_allowance + $salary->education_allowance + $salary->overtime + $salary->bonus;
                            $gaji_bersih = $gaji_kotor - ($salary->insurance_deduction - $salary->pension - $salary->college_deduction);
                        @endphp

                        <td class="lg:px-4 px-2 lg:py-2 py-1 font-sans lg:text-base text-sm">{{ \Carbon\Carbon::parse($salary->created_at)->translatedFormat('d F Y') }}</td>
                        <td class="lg:px-4 px-2 lg:py-2 py-1  lg:text-sm text-xs">
                           <span class="bg-green-600 bg-opacity-50 text-green-200 p-1 inline-flex">Rp. {{ number_format($gaji_bersih, 2, ',', ',') }}</span>
                        </td>
                        <td class="lg:px-4 px-2 lg:py-2 py-1  lg:text-sm text-xs">
                           <span class="bg-lime-500 bg-opacity-50 text-lime-100 p-1 inline-flex">Rp. {{ number_format($gaji_kotor, 2, ',', ',') }}</span>
                        </td>
                        <td class="lg:px-4 px-2 lg:py-2 py-1 font-sans lg:text-sm text-xs print:hidden">
                            <a href="{{ route('employee-salary.show', [$employee->username, $salary->id]) }}" class="text-sm p-1  bg-green-300 bg-opacity-20  text-green-400 inline-flex" title="Lihat Slip Gaji">Slip Gaji</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <script src="{{ asset('dataTable/print.js') }}" defer></script>

</x-app-layout>
