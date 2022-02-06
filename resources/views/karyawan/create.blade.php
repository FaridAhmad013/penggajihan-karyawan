<x-app-layout>
    <x-slot name="title">Tambah Karyawan</x-slot>
        <div class="bg-white shadow-lg rounded lg overflow-hidden p-6 relative">

            <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data" >
            @csrf

                @include('karyawan._form')
                
        </form>
        </div>

</x-app-layout>
