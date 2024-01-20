<div>
    @if(isset($label))
        <label for="email" class="block leading-6 text-cyan-400">{{$label}}</label>
    @endif

    <div class="mt-2">
        <input
            type="{{$type}}"
            name="{{$name}}"
            id="{{$id}}"
            class="block w-full rounded-xl border-0 {{$size}} {{$color}} ring-1 ring-inset
                    focus:ring-2 focus:ring-inset leading-6"
            placeholder="{{$placeholder}}"
        >
    </div>

    @if(isset($tip))
        <p class="mt-2 text-sm text-cyan-700">{{$tip}}</p>
    @endif
</div>
