<div>
    @if(isset($label))
        <label for="{{$label}}"
               class="block leading-6 text-cyan-500 ">
            {{$label}}
        </label>
    @endif

    <select
            @if(isset($id)) id="{{$id}}" @endif
            name="{{$name}}"
            class="mt-2 block w-full rounded-full border-0 py-1 pl-3 pr-10 text-cyan-100 bg-cyan-700 caret-cyan-100
                    ring-1 ring-inset ring-cyan-300 focus:ring-2 focus:ring-cyan-600">
        {{$options}}
    </select>
</div>
