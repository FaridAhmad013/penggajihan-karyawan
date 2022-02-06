<div class="flex flex-wrap">

<div class="mb-3 lg:w-1/2 px-4 w-full">
    <label for="photo" class=" block">Masukan Foto Profile(Opsional)<span class="text-red-600">*</span></label>
    <input type="file" name="photo" id="photo" placeholder="Masukan Foto karyawan" class="w-full file:bg-sky-500 file:rounded-lg focus:ring focus:ring-sky-300 file:text-white file:opacity-50  file:hover:ring file:hover:ring-sky-200 file:border-none file:hover:scale-75 transform file:text-sm file:inline-flex">
    @error('photo')
    <span class="text-xs text-rose-400 italic">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-3 lg:w-1/2 px-4 w-full">
    <label for="username" class="block text-sm lg:text-base">Username<span class="text-red-600">*</span></label>
    <x-input type="text" name="username" id="username" required class="w-full block" placeholder="Masukan Username" value="{{ old('username') ?? $employee->username }}"></x-input>
    @error('username')
    <span class="text-xs text-rose-400 italic">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-3 lg:w-1/2 px-4 w-full">
    <label for="name" class="block lg:text-base text-sm text-gray-700">Nama Karyawan<span class="text-red-600">*</span></label>
    <x-input type="text" id="name" name="name" class="w-full block text-sm" value="{{ old('name') ?? $employee->name }}"  placeholder="Masukan Nama Karyawan" />
    @error('name')
    <span class="text-xs text-rose-400 italic">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-3 lg:w-1/2 px-4 w-full">
    <label for="phone_number" class="block lg:text-base text-sm text-gray-700">Nomor Telepon<span class="text-red-600">*</span></label>
    <x-input type="text" name="phone_number" id="phone_number" placeholder="Masukan Nomor Telepon" class="w-full block text-sm" value="{{ old('phone_number') ?? $employee->phone_number }}"></x-input>
    @error('phone_number')
    <span class="text-xs text-rose-400 italic">
        {{ $message }}
    </span>
    @enderror
</div>



<div class="mb-3 lg:w-1/2 px-4 w-full">
    <p>Jenis Kelamin<span class="text-red-600">*</span></p>

    <div class="flex space-x-2">
        <div class="">
            <label for="gender"><input type="radio" name="gender" id="gender" value="laki-laki" class="mr-2" {{ $employee->gender == 'laki-laki' ? 'checked' : '' }}>Laki-Laki</label>
        </div>
        <div >
            <label for="gender"><input type="radio"  name="gender" id="gender" value="perempuan" class="mr-2" {{ $employee->gender == 'perempuan' ? 'checked' : '' }}>Perempuan</label>
        </div>
    </div>

    @error('gender')
    <span class="text-xs text-rose-400 italic">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-3 lg:w-1/2 px-4 w-full">
    <label class="label block text-gray-700 lg:text-base text-sm">Tanggal Masuk<span class="text-red-600">*</span></label>
    <x-input type="date" name="entry_date" value="{{ old('entry_date') ?? $employee->entry_date }}" id="entry_date" class="w-full" />
    @error('entry_date')
    <span class="text-xs text-rose-400 italic">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-3 lg:w-1/2 px-4 w-full">
    <label for="job_id" class="block text-gray-700 lg:text-base text-sm">Pilih Jabatan<span class="text-red-600">*</span></label>
    <select name="job_id" id="job_id" class="rounded-lg w-full border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 hover:ring-sky-300 hover:ring hover:duration-700" required>
        <option value="" selected>Pilih Jabatan</option>
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

<div class="mb-3 lg:w-1/2 px-4 w-full">
    <label for="education">Pendidikan Terakhir<span class="text-red-600">*</span></label>
    <select name="education" id="education" class="rounded-lg w-full border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 hover:ring-sky-300 hover:ring hover:duration-700" required>
        <option value="">Pilih Pendidikan Terakhir</option>
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

<div class="mb-3 lg:w-1/2 px-4 w-full">
    <label for="basic_salary" class="block text-gray-700 lg:text-base text-sm">Masukan Gaji Pokok<span class="text-red-600">*</span></label>
    <x-input type="number" name="basic_salary" id="basic_salary" class="w-full" value="{{ $employee->basic_salary ?? '3700000' }}"></x-input>
    @error('basic_salary')
    <span class="text-xs text-rose-400 italic">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-3 lg:w-1/2 px-4 w-full items-center">
    <label for="status" class="block text-gray-700 lg:text-base text-sm">Masukan Status <span class="text-red-600">*</span></label>
    <select name="status" id="status" class="rounded-lg w-full border-gray-200 focus:outline-none focus:ring focus:ring-sky-300 focus:ring-opacity-50 hover:ring hover:ring-sky-300 duration-700" required>
        <option value="">Pilih Status</option>
        <option value="tetap" {{ $employee->status == 'tetap' ? 'selected' : '' }}>Tetap</option>
        <option value="kontrak" {{ $employee->status == 'kontrak' ? 'selected' : '' }}>Kontrak</option>
    </select>
    @error('status')
    <span class="text-xs text-rose-400 italic">
        {{ $message }}
    </span>
    @enderror
</div>

<div class="mb-3 w-full px-4">
    <label for="address" class="block text-gray-700 lg:text-base text-sm">Alamat<span class="text-red-600">*</span></label>
    <textarea name="address"  id="address" class="rounded-lg border-gray-200 text-sm w-full focus:outline-none focus:ring-opacity-50 focus:ring-sky-300 focus:ring hover:scale-x-105 focus:scale-105 duration-105 hover:ring-sky-300 hover:ring duration-700">{{ old('address') ?? $employee->address }}</textarea>
    @error('address')
    <span class="text-xs text-rose-400 italic">
        {{ $message }}
    </span>
    @enderror
</div>

</div>

<div class="flex justify-between items-center px-4">
    <x-back></x-back>
    <x-button>{{ $submit ?? 'Tambah Karyawan' }}</x-button>
</div>
