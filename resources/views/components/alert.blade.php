<div
    class="mb-3 w-full items-center rounded-lg bg-cyan-200/50 px-4 py-2 text-base text-warning-800 inline-flex border border-cyan-300/60"
    role="alert">

    @isset($icon)
        <span class="pr-3 text-white">
        {!! $icon !!}
        </span>
    @endisset

    @if($slot->isNotEmpty())
        <span class="text-cyan-200 font-semibold">{{ $slot }}</span>
    @endif

        @if($dismissible)
            <button
                type="button"
                class="ml-auto box-content rounded-none border-none text-cyan-300/80
                        hover:text-cyan-200
                        focus:opacity-100 focus:shadow-none focus:outline-none"
                aria-label="Close">
                <span class="w-[1em] focus:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                </span>
            </button>
        @endif
</div>
