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

        @if ($salaries->count())
        <div class="bg-white shadow-lg p-6 relative transition-all duration-1000">

            <div class="overflow-x-auto">
                <x-table>
                    <thead class="bg-gradient-to-r from-teal-500 to-sky-600 px-3 py-2 text-white print:font-semibold print:text-black">
                        <tr>
                            <x-th>Tanggal</x-th>
                            <x-th>Gaji Bersih</x-th>
                            <x-th>Gaji Kotor</x-th>
                            <x-th class="print:hidden">Opsi</x-th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($salaries as $salary)
                        <tr class="odd:bg-green-50">

                            @php
                                $gaji_kotor = $salary->employee->basic_salary + $salary->transportation_allowance + $salary->achievement_allowance + $salary->education_allowance + $salary->overtime + $salary->bonus;
                                $gaji_bersih = $gaji_kotor - ($salary->insurance_deduction - $salary->pension - $salary->college_deduction);
                            @endphp

                            <x-td>{{ \Carbon\Carbon::parse($salary->created_at)->translatedFormat('d F Y') }}</x-td>
                            <x-td>
                               <span class="bg-green-600 bg-opacity-50 text-green-50 font-bold p-1 inline-flex">Rp. {{ number_format($gaji_bersih, 2, ',', ',') }}</span>
                            </x-td>
                            <x-td>
                               <span class="bg-lime-600 bg-opacity-50 text-lime-50 font-bold p-1 inline-flex">Rp. {{ number_format($gaji_kotor, 2, ',', ',') }}</span>
                            </x-td>
                            <x-td class="print:hidden">
                                <a href="{{ route('employee-salary.show', [$employee->username, $salary->id]) }}" class="text-sm p-1  bg-green-300 bg-opacity-20  text-green-400 inline-flex" title="Lihat Slip Gaji">Slip Gaji</a>
                            </x-td>
                        </tr>
                        @endforeach
                    </tbody>
                </x-table>
            </div>

        </div>
        @else
        <x-data-not-found message="Karyawan Belum Pernah Mendapatkan Gaji" />
        @endif


    <script src="{{ asset('dataTable/print.js') }}" defer></script>

</x-app-layout>
