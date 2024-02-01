<div class="relative flex flex-col rounded-lg overflow-hidden max-w-sm">

    <div class="h-auto overflow-hidden">
        @if(isset($href)) <a href="{{$href}}"> @endif
            <div class="h-44 overflow-hidden relative">
                {{$image}}
            </div>
        @if(isset($href)) </a> @endif
    </div>

    @if(isset($body))
        <div class="bg-cyan-800 py-4 px-3">
            <h3 class="mb-2 font-bold text-cyan-500">
                {{$title}}
            </h3>
            <div class="flex justify-between items-center">
                <p class="text-white/70">
                    {{$body}}
                </p>
            </div>
        </div>
    @endif

    @if(isset($footer))
        <div class="bg-cyan-700 px-6 py-5">
            {{$footer}}
        </div>
    @endif
</div>
