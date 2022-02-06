<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-700 focus:outline-none focus:border-gray-900 focus:ring ring-blue-300 disabled:opacity-25 transform hover:scale-90 focus:scale-90 duration-700']) }}>
    {{ $slot }}
</button>
