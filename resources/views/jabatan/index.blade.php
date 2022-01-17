<x-app-layout >
    <x-slot name="title">Rekap Jabatan</x-slot>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl inline-flex bg-gradient-to-r from-cyan-600 via-white to-sky-700 text-transparent bg-clip-text">
            {{ __('Halaman Jabatan') }}
        </h2>
        <div class="flex justify-end">
            <a href="{{ route('job.create') }}" class="inline-flex bg-rose-600 text-rose-50 px-3 py-2 rounded-lg text-sm hover:scale-90 hover:transform duration-700">
                <div class="flex justify-between items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                      </svg>
                      Tambah Jabatan
                </div>
            </a>
        </div>
    </x-slot>

    <div class="flex justify-center">
        <div class="bg-white p-6 shadow-lg rounded-g overflow-hidden lg:w-8/12 md:w-10/12 w-full">

            <table id="myTable">
                <thead class="bg-gradient-to-r from-rose-600 to-amber-600">
                    <tr>
                        <th class="lg:text-base text-sm  font-medium text-white px-3 py-2">#</th>
                        <th class="lg:text-base text-sm  font-medium text-white px-3 py-2">Nama Jabatan</th>
                        <th class="lg:text-base text-sm  font-medium text-white px-3 py-2">Besar Tunjangan</th>
                        <th class="lg:text-base text-sm  font-medium text-white px-3 py-2">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $index => $job)
                        <tr class="odd:bg-amber-50 border-x border-amber-100 leading-relaxed">
                            <td class="px-3 py-2 lg:text-sm text-xs font-serif ">{{ $index + 1 }}</td>
                            <td class="px-3 py-2 lg:text-sm text-xs font-serif ">{{ $job->title }}</td>
                            <td class="px-3 py-2 lg:text-sm text-xs font-serif ">Rp. {{ number_format($job->subsidy, 2, ',', ',') }}</td>
                            <td class="flex space-x-2 px-3 py-1">
                                <a href="{{ route('job.edit', $job->id) }}"
                                    class="p-1 bg-sky-400 lg:text-sm text-xs font-serif hover:scale-75 transform duration-700 text-sky-50 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" /><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" /></svg></a>
                                <form action="{{ route('job.destroy', $job->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('Apakah Anda Yakin akan menghapus Jabatan ini')"
                                        class="p-1 text-rose-50 bg-rose-500 lg:text-sm text-xs font-serif transform hover:scale-75 duration-700 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                          </svg>

                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset('dataTable/print.js') }}" defer></script>

</x-app-layout>
