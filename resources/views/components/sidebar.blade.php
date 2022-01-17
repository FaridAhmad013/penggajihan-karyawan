<div x-show="isOpen()" class="fixed max-w-sm xl:static inset-0 flex min-h-screen z-50 print:hidden">
    <div @click.away="handleAway()" class="w-80 text-white bg-gray-800 shadow">
        <div class="flex content-between">
            <div class="p-3 w-full">
                <h1
                    class="font-bold bg-gradient-to-r from-sky-500 text-center via-rose-300 to-blue-500 inline-flex text-transparent bg-clip-text bg-transparent text-lg stroke-2 cursor-move">
                    Penggajihan</h1>
            </div>
            <a @click.prevent="handleClose()"
                class="p-3 hover:bg-cyan-600 font-extrabold  cursor-wait flex-1 flex items-center"
                href="{{ route('dashboard') }}">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>
        </div>
        <a class="flex items-center w-full p-3 hover:bg-cyan-600 font-extrabold cursor-wait "
            href="{{ route('dashboard') }}">
            <svg class="h-6 w-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
        </a>

        <a class="flex items-center w-full p-3 hover:bg-cyan-600 font-extrabold cursor-wait "
            href="{{ route('job.index') }}">
            <svg class="h-6 w-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Jabatan
        </a>

        <a class="flex items-center w-full p-3 hover:bg-cyan-600 font-extrabold cursor-wait "
        href="{{ route('employee.index') }}">
        <svg class="h-6 w-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        Data Karyawan
        </a>

        <a class="flex items-center w-full p-3 hover:bg-cyan-600 font-extrabold cursor-wait "
        href="{{ route('report') }}">
        <svg class="h-6 w-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        Laporan Gaji Karyawan
        </a>

        {{-- <a class="flex items-center w-full p-3 hover:bg-cyan-600  font-extrabold cursor-wait "
        href="{{ route('schedule.index') }}">
        <svg class="h-6 w-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        Jadwal Kerja
        </a> --}}
    </div>
</div>
