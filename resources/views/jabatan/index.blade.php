<x-app-layout >
    <x-slot name="title">Rekap Jabatan</x-slot>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl inline-flex bg-gradient-to-r from-cyan-600 via-white to-sky-700 text-transparent bg-clip-text">
            {{ __('Halaman Jabatan') }}
        </h2>
        <div class="flex justify-end">
            <a href="{{ route('job.create') }}" class="inline-flex bg-cyan-500 lg:text-sm text-sm text-cyan-50 lg:px-3 px-2 py-1 lg:py-2 hover:scale-90 hover:transform  duration-700 rounded-md">
               Tambah Jabatan
            </a>
        </div>
    </x-slot>

    @if ($jobs->count())

    <div class="flex justify-center">
        <div class="bg-white p-6 shadow-lg rounded-g overflow-hidden w-full transform duration-1000">

            <div class="overflow-x-auto">
                <x-table>
                    <thead class="bg-gradient-to-br from-cyan-500 to-sky-600 text-sky-50">
                        <tr>
                            <x-th>#</x-th>
                            <x-th>Nama Jabatan</x-th>
                            <x-th>Besar Tunjangan</x-th>
                            <x-th>Opsi</x-th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $index => $job)
                            <tr class="odd:bg-teal-50 leading-relaxed transform hover:translate-y-3 duration-1000">
                                <x-td>{{ $index + 1 }}</x-td>
                                <x-td>{{ $job->title }}</x-td>
                                <x-td>Rp. {{ number_format($job->subsidy, 2, ',', ',') }}</x-td>
                                <x-td>
                                    <div class="flex flex-wrap">

                                        <x-icon class="bg-sky-400 text-sky-50" title="Edit Karyawan">
                                            <a href="{{ route('job.edit', $job->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" /><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </x-icon>

                                        <x-icon class="bg-emerald-500 text-emerald-50" title="Lihat Karyawan Dengan Jabatan {{ $job->title }}">

                                            <a href="{{ route('job.show', $job->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2h-1.528A6 6 0 004 9.528V4z" />
                                                <path fill-rule="evenodd"
                                                    d="M8 10a4 4 0 00-3.446 6.032l-1.261 1.26a1 1 0 101.414 1.415l1.261-1.261A4 4 0 108 10zm-2 4a2 2 0 114 0 2 2 0 01-4 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            </a>

                                        </x-icon>

                                        <form action="{{ route('job.destroy', $job->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <x-icon class="bg-rose-500 text-rose-50">

                                                <button type="submit" onclick="return confirm('Apakah Anda Yakin akan menghapus Jabatan ini')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                  </svg>

                                            </button>

                                            </x-icon>

                                        </form>
                                    </div>
                                </x-td>

                            </tr>
                        @endforeach
                    </tbody>
                </x-table>
            </div>

        </div>
    </div>

    @else
    <x-data-not-found message="Tidak Ada Jabatan"/>
    @endif

    <script src="{{ asset('dataTable/print.js') }}" defer></script>

</x-app-layout>
