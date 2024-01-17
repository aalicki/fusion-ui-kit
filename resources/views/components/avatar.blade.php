@if ($label)
    <div class="{{$size}} flex items-center justify-center rounded-full border border-cyan-300/60 bg-cyan-700">
        <span class="font-semibold">{{ $label }}</span>
    </div>
@else
    <img class="{{$size}} flex items-center rounded-full border border-cyan-300/60"
         src="{{$img}}" alt="">
@endif
