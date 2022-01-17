<x-app-layout>
    <x-slot name="title">{{ $employee->name }}</x-slot>
    <div class="flex justify-center">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden lg:w-6/12 p-6">

            <form action="{{ route('employee.update', $employee->username) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
                <input type="hidden" name="image_old" value="{{ $employee->photo }}">

                <div class="mb-3">
                    <label for="photo" class="text-sm block">Masukan Foto Karyawan</label>
                    <input type="file" name="photo" id="photo" placeholder="Masukan Foto karyawan" class="w-full file:bg-sky-500 file:rounded-lg focus:ring focus:ring-sky-300 file:text-white file:opacity-50  file:overflow-hidden file:hover:ring file:hover:ring-sky-200 file:border-none file:hover:scale-75 transform file:text-sm">
                    @error('photo')
                    <span class="text-xs text-rose-400 italic">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

            <div class="mb-3">
                <label for="name" class="block lg:text-base text-sm text-gray-700">Nama Karyawan</label>
                <x-input type="text" name="name" id="name" value="{{ $employee->name }}" class="w-full "></x-input>
                @error('name')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone_number" class="block lg:text-base text-sm text-gray-700">Nomor Hp</label>
                <x-input type="text" name="phone_number" id="phone_number" value="{{ $employee->phone_number }}" class="w-full"></x-input>
                @error('phone_number')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="block lg:text-base text-sm text-gray-700">Masukan Alamat</label>
                <textarea name="address" id="address" class="w-full hover:ring hover:ring-sky-300 hover:scale-x-105 transform border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 focus:scale-x-105 duration-700">{{ $employee->address }}</textarea>
                @error('address')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3 flex space-x-2">
                <div>
                    <label for=""><input type="radio" name="gender" id="gender" value="laki-laki" class="mr-2" {{ $employee->gender === 'laki-laki' ? 'checked' : '' }}>Laki-laki</label>
                </div>
                <div>
                    <label for=""><input type="radio" name="gender" id="gender" value="perempuan" class="mr-2" {{ $employee->gender ===  'perempuan' ? 'checked' : ''}}>Perempuan</label>
                </div>
                @error('gender')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="entry_date" class="block lg:text-base text-sm text-gray-700">Tanggal Masuk</label>
                <x-input type="date" name="entry_date" id="entry_date" value="{{ $employee->entry_date }}" class="w-full"></x-input>
                @error('entry_date')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="education" class="block text-gray-700 lg:text-base text-sm">Pendidikan Terakhir</label>
                <select name="education" id="education" class="w-full hover:ring hover:ring-sky-300 hover:scale-x-105 transform border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 focus:scale-x-105 duration-700">
                    <option value="sd" {{ $employee->education == 'sd' ? 'selected' : '' }}>SD</option>
                    <option value="smp" {{ $employee->education == 'smp' ? 'selected' : '' }}>SMP</option>
                    <option value="sma" {{ $employee->education == 'sma' ? 'selected' : '' }}>SMA</option>
                    <option value="d3" {{ $employee->education == 'd3' ? 'selected' : '' }}>D3</option>
                    <option value="s1" {{ $employee->education == 's1' ? 'selected' : '' }}>S1</option>
                    <option value="s2" {{ $employee->education == 's2' ? 'selected' : '' }}>S2</option>
                    <option value="s3" {{ $employee->education == 's3' ? 'selected' : '' }}>S3</option>
                </select>
                @error('education')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="job_id" class="block lg:text-base text-sm text-gray-700">Jabatan</label>
                <select name="job_id" id="job_id" class="w-full hover:ring hover:ring-sky-300 hover:scale-x-105 transform border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 focus:scale-x-105 duration-700">
                    @foreach ($jobs as $job)
                    <option value="{{ $job->id }}" {{ $job->id == $employee->job_id ? 'selected' : '' }}>{{ $job->title }}</option>
                    @endforeach
                </select>
                @error('job_id')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="basic_salary" class="block lg:text-base text-sm text-gray-700">Gaji Pokok</label>
                <x-input type="number" name="basic_salary" value="{{ $employee->basic_salary }}" id="basic_salary" class="w-full border-gray-200"></x-input>
                @error('basic_salary')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="block lg:text-base text-sm text-gray-700">Pilih Status</label>
                <select name="status" id="status" class="w-full hover:ring hover:ring-sky-300 hover:scale-x-105 transform border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 focus:scale-x-105 duration-700">
                    <option value="tetap" {{ $employee->status == 'tetap' ? 'selected' : '' }}>Pegawai Tetap</option>
                    <option value="kontrak" {{ $employee->status == 'kontrak' ? 'selected' : '' }}>Pegawai Kontrak</option>
                </select>
                @error('status')
                <span class="text-xs text-rose-400 italic">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="flex justify-end">
                <x-button>Edit Data Karyawan</x-button>
            </div>

            </form>

        </div>
    </div>
</x-app-layout>
