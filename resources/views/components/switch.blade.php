<label for="{{$id}}"
    class="flex items-center cursor-pointer select-none text-cyan-600"
>
    <div class="relative">
        <input
            id="{{$id}}"
            type="checkbox"
            class="peer sr-only"
            value="{{$value}}">

        <div class="h-5 rounded-full shadow-inner {{$bg}} w-14"></div>

        <div class="absolute left-0 transition {{$dialBg}} rounded-full dot shadow-switch-1 -top-1 h-7 w-7
                peer-checked:translate-x-full"></div>
    </div>

    <span class="pl-3">{{$slot}}</span>
</label>
