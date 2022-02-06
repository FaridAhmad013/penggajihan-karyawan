<div x-show="isOpen()" class="fixed max-w-sm xl:static inset-0 flex min-h-screen z-50 print:hidden md:transition">
    <div @click.away="handleAway()" class="w-80 text-white bg-gray-800 shadow">

        <div class="fixed w-80">

            <div class="flex content-between">
                <div class="p-3 w-full">
                    <h1
                        class="font-bold bg-gradient-to-r from-sky-500 text-center via-rose-300 to-blue-500 inline-flex text-transparent bg-clip-text bg-transparent text-lg stroke-2 cursor-move">
                        Penggajian Karyawan
                    </h1>
                </div>
                <a @click.prevent="handleClose()"
                    class="p-3 hover:bg-cyan-600 font-extrabold  cursor-wait flex-1 flex items-center "
                    href="{{ route('dashboard') }}">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
            <a class="flex items-center w-full p-3 hover:bg-cyan-600 font-extrabold cursor-wait {{ request()->routeIs('dashboard') ? 'bg-cyan-600 ' : '' }}"
                href="{{ route('dashboard') }}">
                <svg class="h-6 w-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Dashboard
            </a>

            <a class="flex items-center w-full p-3 hover:bg-cyan-600 font-extrabold cursor-wait {{ request()->routeIs(['job.create', 'job.index', 'job.edit']) ? 'bg-cyan-600 ' : '' }}"
                href="{{ route('job.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
                Jabatan
            </a>

            <a class="flex items-center w-full p-3 hover:bg-cyan-600 font-extrabold cursor-wait {{ request()->routeIs(['employee.index', 'employee.create', 'employee.edit', 'employee-salary.index', 'employee-salary.show']) ? 'bg-cyan-600 ' : '' }}"
                href="{{ route('employee.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" x="0px" y="0px"
                viewBox="0 0 481.291 481.291" fill="currentColor">
                <path
                    d="M138.814,146.22c3.12,40.976,19.417,23.314,22.779,41.27c5.59,29.848,32.016,51.436,48.466,58.893 c9.597,4.348,19.48,6.53,29.871,6.704v0.009c0.036,0,0.072-0.004,0.108-0.004s0.072,0.004,0.108,0.004v-0.009 c10.39-0.174,20.272-2.355,29.871-6.704c16.45-7.457,42.876-29.045,48.466-58.893c3.362-17.955,19.659-0.294,22.779-41.27 c0-16.33-8.898-20.394-8.898-20.394s4.523-24.171,6.295-42.77C340.854,59.877,325.129,0,241.25,0 c-0.367,0-0.707,0.02-1.065,0.024c-0.013,0-0.025,0-0.038-0.001V0.019c-0.036,0.001-0.072,0.002-0.108,0.002 s-0.072-0.001-0.108-0.002v0.005c-0.013,0.001-0.025,0.001-0.038,0.001c-0.358-0.005-0.698-0.024-1.065-0.024 c-83.878,0-99.604,59.877-97.409,83.056c1.771,18.599,6.295,42.77,6.295,42.77S138.814,129.89,138.814,146.22z" />
                <path
                    d="M430.313,347.371c-42.308-21.523-103.63-48.406-106.573-49.355c-0.033-0.012-0.058-0.014-0.09-0.024 c-1.721-0.613-3.571-0.953-5.504-0.953c-7.188,0-13.285,4.604-15.547,11.021c-0.012-0.008-0.024-0.013-0.036-0.021 c-10.92,26.315-30.979,73.223-43.434,95.842l-3-63.413c0,0,18.705-39.699,20.752-43.336c4.82-8.525,0.479-15.783-8.557-15.783 c-4.482,0-15.695,0-26.926,0c-0.013,0-0.025,0-0.038,0c-0.072,0-0.144,0-0.216,0c-0.013,0-0.025,0-0.038,0 c-0.154,0-0.308,0-0.462,0s-0.308,0-0.462,0c-0.013,0-0.025,0-0.038,0c-0.072,0-0.144,0-0.216,0c-0.013,0-0.025,0-0.038,0 c-11.23,0-22.442,0-26.926,0c-9.036,0-13.376,7.258-8.557,15.783c2.048,3.637,20.752,43.336,20.752,43.336l-2.999,63.413 c-12.455-22.619-32.514-69.524-43.434-95.842c-0.012,0.008-0.024,0.013-0.036,0.021c-2.262-6.414-8.359-11.021-15.547-11.021 c-1.933,0-3.783,0.34-5.504,0.953c-0.032,0.012-0.057,0.015-0.09,0.024c-2.942,0.949-64.265,27.832-106.573,49.355 c-19,9.666-30.467,21.688-30.467,34.34c0,41.826,0,99.58,0,99.58h219.227h0.191h0.105h0.006h0.107h0.191h0.309h0.309h0.191h0.105 h0.006h0.105h0.191H460.78c0,0,0-57.754,0-99.58C460.779,369.059,449.313,357.037,430.313,347.371z" />
            </svg>
                Data Karyawan
            </a>

            <a class="flex items-center w-full p-3 hover:bg-cyan-600 font-extrabold cursor-wait {{ request()->routeIs('report') ? 'bg-cyan-600 ' : '' }}"
                href="{{ route('report') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
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
</div>
