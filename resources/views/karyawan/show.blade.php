<x-app-layout>
    <div class="flex justify-center">

        <div class="bg-white shadow-lg rounded-lg overflow-hidden relative pr-4 mt-12 ring ring-sky-100">

            <div class="flex justify-between flex-wrap  relative p-6">
                <div class="lg:w-4/12 w-full">
                    <img src="{{ asset($employee->photo ?? 'profile/users/business.png') }}" class="h-full object-cover"></div>
                <div class="lg:w-8/12 w-full mb-3 px-4">
                    <h2 class="lg:text-xl text-lg font-bold text-sky-600 text-center ">{{ $employee->name }}</h2>
                    <ul>
                        <li class="flex justify-between py-3 ">
                           <div class="text-sky-600 text-sm font-semibold w-5/12">Nomor Telepon</div>
                           <div class="text-gray-700 w-7/12 text-sm">{{ $employee->phone_number }}</div>
                        </li>
                        <li class="flex justify-between py-3  ">
                            <div class="text-sky-600 text-sm font-semibold w-5/12">Alamat</div>
                            <div class="text-gray-700 w-7/12 text-sm">{{ $employee->address }}</div>
                         </li>

                         <li class="flex justify-between py-3  ">
                            <div class="text-sky-600 text-sm font-semibold w-5/12">Jenis Kelamin</div>
                            <div class="text-gray-700 w-7/12 text-sm">{{ $employee->gender }}</div>
                         </li>

                         <li class="flex justify-between py-3  ">
                            <div class="text-sky-600 text-sm font-semibold w-5/12">Tanggal Masuk Perusahaan</div>
                            <div class="text-gray-700 w-7/12 text-sm">{{ $employee->entry_date }}</div>
                         </li>

                         <li class="flex justify-between py-3  ">
                            <div class="text-sky-600 text-sm font-semibold w-5/12">Pendidikan Terakhir</div>
                            <div class="text-gray-700 w-7/12 text-sm">{{ $employee->education }}</div>
                         </li>

                         <li class="flex justify-between py-3  ">
                            <div class="text-sky-600 text-sm font-semibold w-5/12">Jabatan</div>
                            <div class="text-gray-700 w-7/12 text-sm">{{ $employee->job->title }}</div>
                         </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
