<div
    class="mb-3 w-full items-center rounded-xl {{$type}} px-4 py-2 inline-flex border"
    role="alert">

    @isset($icon)
        <span class="pr-3">{!! $icon !!}</span>
    @endisset

    @if($slot->isNotEmpty())
        <span class="font-semibold">{{ $slot }}</span>
    @endif

        @if($dismissible)
            <button
                type="button"
                class="ml-auto box-content rounded-none border-none
                        hover:text-white/90
                        focus:opacity-100 focus:shadow-none focus:outline-none
                        fcui-dismissible"
                aria-label="Close">
                <span class="w-[1em] focus:opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </span>
            </button>
        @endif
</div>
