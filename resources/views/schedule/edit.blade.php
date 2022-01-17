<x-app-layout>
<x-slot name="title">Edit Jadwal</x-slot>
    <div class="flex justify-center">

        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 lg:w-6/12">
            <div class="">
                <h2 class="text-lg font-semibold text-center">Edit Jadwal Kerja Karyawan</h2>
            </div>
            <div class="">

                <form action="{{ route('schedule.update', $schedule->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="s_in">Jam Masuk</label>
                    <x-input type="time" class="w-full" name="s_in" id="s_in" value="{{ $schedule->s_in }}" ></x-input>
                </div>

                <div class="mb-3">
                    <label for="s_out">Jam Keluar</label>
                    <x-input type="time" class="w-full" name="s_out" id="s_out" value="{{ $schedule->s_out }}"></x-input>
                </div>

                <x-button>Edit Jadwal Kerja</x-button>
                </form>

            </div>
        </div>

    </div>

</x-app-layout>
