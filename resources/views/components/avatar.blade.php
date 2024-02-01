@if ($label)
    <div class="{{$size}} flex items-center justify-center rounded-full {{$borderColor}} {{$bgColor}}">
        <span class="font-semibold">{{ $label }}</span>
    </div>
@else
    <img class="{{$size}} flex items-center rounded-full {{$borderColor}}"
         src="{{$img}}" alt="">
@endif
