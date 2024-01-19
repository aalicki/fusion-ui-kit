<div class="relative flex flex-col rounded-lg overflow-hidden max-w-sm">

    <div class="h-auto overflow-hidden">
        <a href="#">
        <div class="h-44 overflow-hidden relative">
            {{$image}}
        </div>
        </a>
    </div>

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

    @if(isset($footer))
        <div class="bg-cyan-700 px-2 py-2">
            {{$footer}}
        </div>
    @endif
</div>
