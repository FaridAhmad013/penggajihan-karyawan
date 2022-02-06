<x-app-layout>
    <x-slot name="title">{{ $employee->name }}</x-slot>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden relative p-6">

            <form action="{{ route('employee.update', $employee->username) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
                <input type="hidden" name="image_old" value="{{ $employee->photo }}">


                @include('karyawan._form', ['submit' => 'Edit Karyawan'])

            </form>

        </div>
</x-app-layout>
