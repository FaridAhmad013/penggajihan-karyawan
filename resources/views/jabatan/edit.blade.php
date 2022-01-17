<x-app-layout>
    <div class="flex justify-center">
        <div class="bg-white shadow-lg rounded-lg lg:w-6/12 p-6">

            <form action="{{ route('job.update', $job->id) }}" method="post">
                @csrf
                @method('put')
                <h2 class="font-semibold text-gray-700 text-center">Edit Jabatan</h2>

                <div class="mb-4">
                    <label for="title" class="block">Masukan Nama Jabatan</label>
                    <x-input name="title" value="{{ $job->title }}" id="title" type="text"
                        class="w-full block text-sm" />
                        @error('title')
                        <span class="text-xs text-rose-400 italic">
                            {{ $message }}
                        </span>
                        @enderror
                </div>

                <div class="mb-4">
                    <label for="subsidy" class="block">Masukan Subsidy Jabatan</label>
                    <x-input name="subsidy" value="{{ $job->subsidy }}" type="number" id="subsidy"
                        class="w-full block text-sm" />
                        @error('subsidy')
                        <span class="text-xs text-rose-400 italic">
                            {{ $message }}
                        </span>
                        @enderror
                </div>

                <div class="flex justify-end">
                    <x-button>Edit</x-button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>
