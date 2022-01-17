<x-app-layout>
    <div class="flex justify-center">

        <div class="bg-white shadow-lg rounded-lg overflow-hidden lg:w-10/12 pr-4 ring ring-sky-100">
            <div class="flex justify-between flex-wrap  relative">
                <div class="lg:w-4/12 w-full">
                    <img src="{{ asset($employee->photo ?? 'profile/users/default.jpg') }}" class="h-full object-cover object-center"></div>
                <div class="lg:w-8/12 w-full mb-3 px-4">
                    <h2 class="lg:text-xl text-lg font-bold text-center">{{ $employee->name }}</h2>
                    <ul>
                        <li class="flex justify-between py-3 border-b-2 border-sky-200">
                           <div class="text-gray-700 font-semibold w-5/12">Nomor Telepon</div>
                           <div class="text-gray-700 w-7/12">{{ $employee->phone_number }}</div>
                        </li>
                        <li class="flex justify-between py-3 border-b-2 border-sky-200 ">
                            <div class="text-gray-700 font-semibold w-5/12">Alamat</div>
                            <div class="text-gray-700 w-7/12">{{ $employee->address }}</div>
                         </li>

                         <li class="flex justify-between py-3 border-b-2 border-sky-200 ">
                            <div class="text-gray-700 font-semibold w-5/12">Jenis Kelamin</div>
                            <div class="text-gray-700 w-7/12">{{ $employee->gender }}</div>
                         </li>

                         <li class="flex justify-between py-3 border-b-2 border-sky-200 ">
                            <div class="text-gray-700 font-semibold w-5/12">Tanggal Masuk Perusahaan</div>
                            <div class="text-gray-700 w-7/12">{{ $employee->entry_date }}</div>
                         </li>

                         <li class="flex justify-between py-3 border-b-2 border-sky-200 ">
                            <div class="text-gray-700 font-semibold w-5/12">Pendidikan Terakhir</div>
                            <div class="text-gray-700 w-7/12">{{ $employee->education }}</div>
                         </li>

                         <li class="flex justify-between py-3 border-b-2 border-sky-200 ">
                            <div class="text-gray-700 font-semibold w-5/12">Jabatan</div>
                            <div class="text-gray-700 w-7/12">{{ $employee->job->title }}</div>
                         </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
