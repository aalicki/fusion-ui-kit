<div>
    @if(isset($label))
        <label for="email" class="block leading-6 text-cyan-400">{{$label}}</label>
    @endif

    <div class="mt-2 relative">
        @if (isset($icon))
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                {!! $icon !!}
            </div>
        @endif

        <input
            type="{{$type}}"
            name="{{$name}}"
            @if(isset($id)) id="{{$id}}" @endif
            class="{{$size}} {{$color}} block w-full flex-1 rounded-xl border-0 ring-1 ring-inset
                    focus:ring-2 focus:ring-inset leading-6
                    @if($disabled) disabled:cursor-not-allowed @endif
                    @if(isset($icon)) pl-10 @endif"
            placeholder="{{$placeholder}}"
            @if(isset($value)) value="{{$value}}" @endif
            @if($disabled) disabled @endif
        >
    </div>

    @if(isset($tip))
        <p class="mt-2 text-sm text-cyan-700">{{$tip}}</p>
    @endif
</div>
