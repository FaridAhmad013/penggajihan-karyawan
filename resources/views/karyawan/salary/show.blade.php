<x-app-layout>
    <x-slot name="title">Slip Gaji ( {{ $employee->name }} )</x-slot>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl inline-flex bg-gradient-to-r from-cyan-600 via-white to-sky-700 text-transparent bg-clip-text">
            {{ __('Slip Gaji : ').$employee->name }}
        </h2>

        <div class="flex justify-end">
            <button onclick="return window.print()" class="bg-gradient-to-br from-emerald-500 to-green-600 text-emerald-50 px-3 py-2">Cetak Slip Gaji</button>
        </div>
    </x-slot>

    @php
        $totalPemasukan = $employee->basic_salary + $salary->achievement_allowance + $salary->bonus + $salary->education_allowance + $salary->overtime + $salary->transportation_allowance;
        $totalPengeluaran = $salary->insurance_deduction + $salary->pension + $salary->college_deduction;
    @endphp

        <div class="bg-white shadow-lg rounded-lg p-6 lg:w-10/12 print:shadow-none">

            <header class="flex justify-between flex-wrap items-center">
                <div class="w-6/12 border p-4 text-center">
                    <h3 class="text-2xl font-extrabold">Nama Perusahaan</h3>
                </div>
                <div class="w-6/12 text-center">
                    <h3 class="text-2xl font-extrabold border-b-2 ml-5">Slip Gaji Karyawan</h3>
                </div>
            </header>

            <main class="flex justify-between mt-2 flex-wrap">
                <ul class="text-sm w-6/12 pr-5">
                    <li class="flex justify-between space-x-2">
                        <div>NIK</div>
                        <div class="font-semibold">{{ $employee->id }}</div>
                    </li>
                    <li class="flex justify-between space-x-2">
                        <div>Nama Karyawan</div>
                        <div class="font-semibold">{{ $employee->name }}</div>
                    </li>
                    <li class="flex justify-between space-x-2">
                        <div>Jabatan</div>
                        <div class="font-semibold">{{ $employee->job->title }}</div>
                    </li>
                    <li class="flex justify-between space-x-2">
                        <div>Status</div>
                        <div class="font-semibold">Karyawan {{ $employee->status }}</div>
                    </li>
                </ul>
                <ul class="w-6/12 text-sm">
                    <li class="flex justify-between">
                        <div>Slip No.</div>
                        <div class="font-semibold">{{ $salary->id }}</div>
                    </li>
                    <li class="flex justify-between text-xs">
                        <div>Dicetak</div>
                        <div class="font-semibold">{{ \Carbon\Carbon::parse($salary->created_at)->format('D F Y') }}
                        </div>
                    </li>
                </ul>
            </main>

            <div class="flex flex-wrap justify-between mt-4 pb-4 border-b-2">

                <div class="lg:w-6/12">
                    <table class="leading-relaxed ">
                        <thead>
                            <tr>
                                <th colspan="3" class="bg-gray-700  text-white print:text-black">Penerimaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-2">Gaji Pokok</td>
                                <td class="px-2">Rp. {{ number_format($employee->basic_salary, 2, ',', ',') }}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">Tunjangan Transportasi</td>
                                <td class="px-2">Rp.
                                    {{ number_format($salary->transportation_allowance, 2, ',', ',') }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    Lembur
                                </td>
                                <td class="px-2">
                                    Rp. {{ number_format($salary->overtime, 2, ',', ',') }}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">Tunjangan Prestasi</td>
                                <td class="px-2">
                                    Rp. {{ number_format($salary->achievement_allowance, 2, ',', ',') }}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">
                                    Tunjangan Pendidikan
                                </td>
                                <td class="px-2">
                                    Rp. {{ number_format($salary->education_allowance, 2, ',', ',') }}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2">Bonus</td>
                                <td class="px-2">Rp. {{ number_format($salary->bonus, 2, ',', ',') }}</td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-gray-400 text-white print:text-black">
                            <tr>
                                <td class="px-2">Total Pemasukan</td>
                                <td class="px-2">
                                    Rp. {{ number_format($totalPemasukan, 2, ',', ',') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="lg:w-6/12">
                    <table class="leading-relaxed">
                        <thead class="bg-gray-700 text-white print:text-black">
                            <tr>
                                <th colspan="3">Potongan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-2">
                                    Potongan Kuliah
                                </td>
                                <td class="px-2">
                                    Rp. {{ number_format($salary->college_deduction, 2, ',', ',') }}
                                </td>
                            </tr>

                            <tr>
                                <td class="px-2">
                                    Potongan BPJS
                                </td>
                                <td class="px-2">Rp.
                                    {{ number_format($salary->insurance_deduction, 2, ',', ',') }}</td>
                            </tr>
                            <tr>
                                <td class="px-2">Potongan Pensiun</td>
                                <td class="px-2">Rp. {{ number_format($salary->pension, 2, ',', ',') }}</td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-gray-400 text-white print:text-black">
                            <tr>
                                <td class="px-2">Total Potongan</td>
                                <td class="px-2">Rp. {{ number_format($totalPengeluaran, 2, ',', ',') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

            <div class="flex justify-end">
                <div class="w-4/12">
                    <div class="flex justify-between">

                        <div >Total Gaji</div>
                        <div >Rp. {{ number_format($totalPemasukan - $totalPengeluaran, 2, ',', ',') }}</div>

                    </div>
                </div>
            </div>

        </div>


</x-app-layout>
