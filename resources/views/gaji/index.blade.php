<x-app-layout>
    <x-slot name="title">Kelola Gaji</x-slot>

    @if ($salaries->count())

    <div
    class="bg-white shadow-lg rounded-lg overflow-hidden p-6 relative transform transition-all duration-1000">

    <div class="overflow-x-auto">
        <x-table>
            <thead class="bg-gradient-to-br from-cyan-500 to-sky-600 text-sky-50">
                <tr>
                    <x-th>Tanggal Gajian</x-th>
                    <x-th>Nama Karyawan</x-th>
                    <x-th>Gaji Bersih</x-th>
                    <x-th>Gaji Kotor</x-th>
                    <x-th>Status</x-th>
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

                        <x-td>
                            <span class="px-4 py-2 rounded inline-flex font-semibold transform hover:scale-90  duration-700 {{ $salary->status ? 'bg-green-600 text-green-100' : 'bg-rose-500 text-rose-100 ' }}">
                                <a onclick="return confirm('Apakah Ingin Mengubah Status?')" href="{{ route('salary.edit', $salary) }}">{{ $salary->status ? 'Sudah Dikonfirmasi' : 'Belum Dikonfirmasi' }}</a>
                            </span>
                        </x-td>

                    </tr>
                @endforeach
            </tbody>
        </x-table>

    </div>

</div>

    @else
    <x-data-not-found></x-data-not-found>
    @endif

    <script src="{{ asset('dataTable/print.js') }}" defer></script>

</x-app-layout>
