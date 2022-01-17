<x-app-layout>
    <x-slot name="title">Rekap Karyawan</x-slot>
    <x-slot name="header">
        <h2
            class="font-extrabold text-2xl inline-flex bg-gradient-to-r from-cyan-600 via-white to-sky-700 text-transparent bg-clip-text">
            {{ __('Halaman Rekap Karyawan') }}
        </h2>
        <div class=" flex justify-end">
            <a href="{{ route('employee.create') }}"
                class="inline-flex bg-cyan-500 text-sm text-cyan-50 px-3 py-2 hover:scale-90 hover:transform duration-700 rounded-md">
                Tambah Karyawan
            </a>
        </div>
    </x-slot>

    <div class="bg-white shadow-lg rounded-lg p-6">
        <div class="overflow-x-auto">
            <div class="w-max">
                <table id="myTable" class="">

                    <thead>
                        <tr class="bg-gradient-to-br from-cyan-500 to-sky-600 text-sky-50">
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Nama Karyawan</th>
                            <th class="px-4 py-2">Jabatan</th>
                            <th class="px-4 py-2">Gaji Pokok</th>
                            <th class="px-4 py-2">Tanggal Masuk</th>
                            <th class="px-4 py-2">Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($employees as $index => $employee)
                            <tr class="odd:bg-teal-50 ">

                                <td class="px-2  py-3 lg:text-sm text-sm font-serif">
                                    {{ $index + 1 }}
                                </td>

                                <td class="px-2  py-3 lg:text-sm text-sm font-serif">
                                    {{ $employee->name }}
                                </td>

                                <td class="px-2  py-3 lg:text-sm text-sm font-serif">
                                    {{ $employee->job->title }}
                                </td>

                                <td class="px-2  py-3 text-xs ">
                                    <span class="bg-green-500 bg-opacity-50 inline-flex p-1 text-lime-50  font-extrabold">Rp.
                                        {{ number_format($employee->basic_salary, 2, ',', ',') }}</span>
                                </td>

                                <td class="px-2  py-3 lg:text-sm text-sm font-serif">
                                    {{ \Carbon\Carbon::parse($employee->entry_date)->format('d F Y') }}
                                </td>

                                <td class="flex px-2 py-3 space-x-2">

                                    <a href="{{ route('employee.edit', $employee->username) }}" title="Edit Karyawan"
                                        class="p-1 bg-sky-400 lg:text-sm text-xs font-serif hover:scale-75 transform duration-700 text-sky-50 rounded-lg"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd"
                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>

                                    <a href="{{ route('employee.show', $employee->username) }}"
                                        class="p-1 bg-emerald-500 lg:text-sm text-xs font-serif hover:scale-75 transform duration-700 text-emerald-50 rounded-lg"
                                        title="Lihat Detail Karyawan">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2h-1.528A6 6 0 004 9.528V4z" />
                                            <path fill-rule="evenodd"
                                                d="M8 10a4 4 0 00-3.446 6.032l-1.261 1.26a1 1 0 101.414 1.415l1.261-1.261A4 4 0 108 10zm-2 4a2 2 0 114 0 2 2 0 01-4 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>

                                    <form action="{{ route('employee.destroy', $employee->username) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="p-1 bg-rose-500 lg:text-sm text-xs hover:scale-75 transform duration-700 text-rose-50 rounded-lg"
                                            title="Hapus Karyawan">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>

                                    <a href="{{ route('employee-salary.index', $employee->username) }}" ) }}"
                                        class="p-1 bg-green-500 lg:text-sm text-xs hover:scale-75 transform duration-700 text-green-50 rounded-lg"
                                        title="Gaji Karyawan">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="{{ asset('dataTable/print.js') }}" defer></script>

</x-app-layout>
