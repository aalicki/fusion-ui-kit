<span class="inline-flex items-center rounded-full px-3 py-1 font-medium {{$type}}">
     @isset($icon)
        <span class="pr-3">{!! $icon !!}</span>
     @endisset
    {{ $slot  }}
</span>
