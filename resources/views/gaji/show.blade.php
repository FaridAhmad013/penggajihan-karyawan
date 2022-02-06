<x-app-layout>

    @if ($salaries->count())
    <div class="bg-white shadow-lg rounded lg relative p-6 transform duration-1000">

        <x-table>
            <thead class="bg-gradient-to-br from-cyan-500 to-sky-600 text-sky-50">
                <tr>
                    <x-th>Tanggal Gajian</x-th>
                    <x-th>Nama Karyawan</x-th>
                    <x-th>Gaji Bersih</x-th>
                    <x-th>Gaji Kotor</x-th>
                </tr>
            </thead>
            <tbody class="leading-relaxed font-sans">
                @foreach ($salaries as $salary)
                    <tr class="odd:bg-teal-50 transform hover:translate-y-3 duration-1000">
                        @php
                            $gaji_kotor = $salary->employee->basic_salary + ($salary->achievement_allowance + $salary->bonus + $salary->transportation_allowance + $salary->overtime + $salary->education_allowance);
                            $gaji_bersih = $gaji_kotor - ($salary->pension - $salary->college_deduction - $salary->insurance_deduction);
                            $total = 0;
                            $total += $gaji_bersih;
                        @endphp
                        <x-td>{{ \Carbon\Carbon::parse($salary->created_at)->format('d F Y') }}</x-td>
                        <x-td>{{ $salary->employee->name }}</x-td>
                        <x-td>
                            <span
                                class="p-1 bg-opacity-50 bg-green-500 text-green-50 print:text-black md:text-sm text-xs inline-flex">Rp.
                                {{ number_format($gaji_bersih, 2, ',', ',') }}</span>
                        </x-td>
                        <x-td>
                            <span
                                class="p-1 bg-opacity-50 bg-lime-500 text-lime-50 print:text-black md:text-sm text-xs inline-flex">Rp.
                                {{ number_format($gaji_kotor, 2, ',', ',') }}</span>
                        </x-td>

                    </tr>
                @endforeach
            </tbody>
        </x-table>

    </div>
    @else
    <x-data-not-found></x-data-not-found>
    @endif

    <script src="{{ asset('dataTable/print.js') }}" defer></script>

</x-app-layout>
