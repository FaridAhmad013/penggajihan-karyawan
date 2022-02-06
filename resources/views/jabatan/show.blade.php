<x-app-layout>
    <x-slot name="title">Jabatan {{ $job->title }}</x-slot>

    <div class="bg-white shadow-lg relative">

        <h3 class="text-2xl px-6 font-semibold text-sky-500 text-right">Total Karyawan {{ $employees->count() }}</h3>
        <div class="flex flex-wrap">

            @foreach ($employees as $employee)

            <div class="lg:w-1/3 md:w-1/2 sm:w-full w-full p-6">
            <div class="bg-slate-700 lg:h-96 h-screen rounded-lg p-6 shadow-lg shadow-sky-500 relative overflow-hidden">

                <img src="{{ asset($employee->photo ?? 'profile/users/business.png') }}" alt="" class="w-full rounded-full h-1/2 sm:h-2/3 object-cover">
                <main>
                    <div class="flex justify-center text-xl font-semibold text-sky-400">

                        <a class="text-center" href="{{ route('employee.show', $employee->username) }}">{{ $employee->name }}</a>
                    </div>
                </main>

            </div>
            </div>

            @endforeach

        </div>

    </div>

</x-app-layout>
