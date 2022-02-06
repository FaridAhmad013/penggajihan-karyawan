<div {{ $attributes->merge(["class" => "rounded-lg shadow-lg lg:mr-4 md:mr-4 sm:mr-4 mt-2 lg:md:sm:mt-0 rounded flex-col overflow-hidden transition-all hover:translate-x-3  duration-1000"]) }}>
    <a href="{{ $link ?? '#' }}" class="flex justify-between items-center pt-6 px-6">
        {{ $slot }}
        <span class="font-semibold lg:text-5xl text-4xl">{{ $value ?? 0 }}</span>
    </a>
    <h2 class="mb-4 px-6">Jumlah {{ $title ?? '' }}</h2>
    <a href="{{ $link ?? '#' }}" class="border-t-2 flex justify-between px-6 py-2 items-center">
        Lihat Detail {{ $title ?? '' }}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </a>
</div>
