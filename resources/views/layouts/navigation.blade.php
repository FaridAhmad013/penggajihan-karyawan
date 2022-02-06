<div class="w-screen">
    <nav class="bg-gradient-to-r from-gray-900 via-cyan-900 to-stone-900 flex items-center print:hidden">
        <div x-show="!isOpen()" class="flex">
            <a x-show="!isOpen()" @click.prevent="handleOpen()" class="p-3 hover:bg-indigo-500 text-white"
                href="#">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </a>
            <a class="p-3 hover:border-indigo-700  font-bold text-lg" href="">
                <h1
                    class="font-bold bg-gradient-to-r from-sky-500 via-rose-300 to-blue-500 inline-flex text-transparent bg-clip-text bg-transparent text-lg text-center stroke-2 cursor-move">
                    Penggajihan Karyawan</h1>
            </a>
        </div>
        <div class="flex ml-auto">
            <div class="p-3 text-white relative">

                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">

                            <button class="flex justify-between items-center text-white font-semibold">
                                <div class="flex justify-between items-center">
                                    <img src="{{ asset(Auth::user()->photo_profile ?? 'profile/users/default.jpg')  }}" alt="{{ Auth::user()->name }}" class="lg:h-14 lg:w-14 h-12 w-12  rounded-full object-cover object-center ring mr-2">
                                    {{ Auth::user()->name }}
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

        </div>
    </nav>
@isset($header)
<header class="bg-gradient-to-r from-gray-900 via-cyan-900 to-stone-900  lg:p-10 md:p-8 p-6 transform duration-1000 print:hidden">
    {{ $header }}
</header>
@endisset


    <main class="relative" x-data="{
        popUp: true
    }">
        <div class="p-10">
        {{ $slot }}

        </div>
            @if (Session::has('success'))
                <x-alert :message="Session::get('success')"></x-alert>
            @endif
    </main>
</div>
