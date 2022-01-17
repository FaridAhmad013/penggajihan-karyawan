<x-app-layout>

    <div class="flex">
        <div class="bg-white shadow-lg rounded-lg p-6 overflow-hidden">

            <div class="mb-4">
                <h2 class="text-center text-lg font-semibold">Jam Kerja Karyawan</h2>
            </div>

            <div class="">
                <table>
                    <thead class="bg-gradient-to-r from-teal-500 to-sky-600">
                        <tr>
                            <th class="px-4 py-2 text-teal-50 text-base font-semibold">#</th>
                            <th class="px-4 py-2 text-teal-50 text-base font-semibold">Jam Masuk</th>
                            <th class="px-4 py-2 text-teal-50 text-base font-semibold">Jam Keluar</th>
                            <th class="px-4 py-2 text-teal-50 text-base font-semibold">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $index => $schedule)

                        <tr class="bg-teal-50 border-b-2 border-teal-100">

                            <td class="px-4 py-2">{{ $index + 1 }}</td>
                            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($schedule->s_in)->isoFormat('H:mm:ss a') }}</td>
                            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($schedule->s_out)->isoFormat('H:mm:ss a') }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('schedule.edit', $schedule->id) }}" class="bg-teal-500 px-2 py-2 text-teal-50 text-xs">Ubah Jadwal</a>
                            </td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
