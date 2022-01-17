<x-app-layout>
    <x-slot name="title">Tambah Karyawan</x-slot>
    <div class="flex justify-center">
        <div class="bg-white shadow-lg rounded lg overflow-hidden p-6 lg:w-6/12">

            <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="photo" class="text-sm block">Masukan Foto Profile(Opsional)</label>
                <input type="file" name="photo" id="photo" placeholder="Masukan Foto karyawan" class="w-full file:bg-sky-500 file:rounded-lg focus:ring focus:ring-sky-300 file:text-white file:opacity-50  file:hover:ring file:hover:ring-sky-200 file:border-none file:hover:scale-75 transform file:text-sm file:inline-flex">
                @error('photo')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="username" class="block text-sm lg:text-base">Username</label>
                <x-input type="text" name="username" id="username" required class="w-full block" placeholder="Masukan Username" value="{{ old('username') }}"></x-input>
                @error('username')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="block lg:text-base text-sm text-gray-700">Nama Karyawan</label>
                <x-input type="text" id="name" name="name" class="w-full block text-sm" value="{{ old('name') }}"  placeholder="Masukan Nama Karyawan" />
                @error('name')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone_number" class="block lg:text-base text-sm text-gray-700">Nomor Telepon</label>
                <x-input type="text" name="phone_number" id="phone_number" placeholder="Masukan Nomor Telepon" class="w-full block text-sm" value="{{ old('phone_number') }}"></x-input>
                @error('phone_number')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="block text-gray-700 lg:text-base text-sm">Alamat</label>
                <textarea name="address"  id="address" class="rounded-lg border-gray-200 text-sm w-full focus:outline-none focus:ring-opacity-50 focus:ring-sky-300 focus:ring hover:scale-x-105 focus:scale-105 duration-105 hover:ring-sky-300 hover:ring duration-700">{{ old('address') }}</textarea>
                @error('address')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3 flex space-x-2">
                <div class="">
                    <label for="gender"><input type="radio"  name="gender" id="gender" value="laki-laki" class="mr-2">Laki-Laki</label>
                </div>
                <div >
                    <label for="gender"><input type="radio"  name="gender" id="gender" value="perempuan" class="mr-2">Perempuan</label>
                </div>
                @error('gender')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="label block text-gray-700 lg:text-base text-sm">Tanggal Masuk</label>
                <x-input type="date" name="entry_date" value="{{ old('entry_date') }}" id="entry_date" class="w-full" />
                @error('entry_date')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="job_id" class="block text-gray-700 lg:text-base text-sm">Pilih Jabatan</label>
                <select name="job_id" id="job_id" class="rounded-lg w-full border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 hover:ring-sky-300 hover:ring hover:duration-700" required>
                    <option value="" selected>Pilih Jabatan</option>
                    @foreach ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->title }}</option>
                    @endforeach
                </select>
                @error('job_id')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="education">Pendidikan Terakhir</label>
                <select name="education" id="education" class="rounded-lg w-full border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 hover:ring-sky-300 hover:ring hover:duration-700" required>
                    <option value="">Pilih Pendidikan Terakhir</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma">SMA</option>
                    <option value="d3">D3</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                </select>
                @error('education')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="basic_salary" class="block text-gray-700 lg:text-base text-sm">Masukan Gaji Pokok</label>
                <x-input type="number" name="basic_salary" id="basic_salary" class="w-full" value="3700000"></x-input>
                @error('basic_salary')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="block text-gray-700 lg:text-base text sm">Masukan Status</label>
                <select name="status" id="status" class="rounded-lg w-full border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 focus:ring-opacity-50 hover:ring hover:ring-sky-300 duration-700" required>
                    <option value="">Pilih Status</option>
                    <option value="tetap" >Tetap</option>
                    <option value="kontrak" >Kontrak</option>
                </select>
                @error('status')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="flex justify-end">
                <x-button>Tambah Karyawan</x-button>
            </div>

        </form>

        </div>
    </div>
</x-app-layout>
