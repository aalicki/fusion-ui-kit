<a
    href="{{$href}}"
    class="{{$classes}}"
    @if(isset($id))id="{{$id}}" @endif>

    @if(isset($icon))
        <span class="pr-2">{!! $icon !!}</span>
    @endif

    {{$slot}}
</a>
