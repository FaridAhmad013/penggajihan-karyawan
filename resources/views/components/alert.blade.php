<div class="bg-white shadow-lg max-w-sm p-6 mb-4 mr-2 fixed bottom-0 right-0 m-8 w-5/6 md:w-full" x-show="popUp">
    <div class="flex justify-between items-center border-b-2">
        <div class="text-lg font-semibold">Notifikasi</div>
        <button @click="popUp = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
              </svg>
        </button>
    </div>
    <p class="leading-relaxed text-sm font-sans pt-2">
        {{ $message }}
    </p>
</div>
