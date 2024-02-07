@if(isset($href))

    <a
        href="{{$href}}"
        class="{{$size}} {{$type}} {{$classes}} block
            @if(!$btnGroup) rounded-full @else first:rounded-l-lg last:rounded-r-lg @endif
            font-semibold text-center
            focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600"
        @if(isset($id)) id="{{$id}}" @endif>

        @if($icon)
            <span class="@if(empty($slot)) pr-3 @endif"> {!! $icon !!}</span>
        @endif

        {{$slot}}
    </a>
@else

    <button
        type="{{$btnType}}"
        class="{{$size}} {{$type}} {{$classes}}
            @if(!$btnGroup) rounded-full @else first:rounded-l-lg last:rounded-r-lg @endif
            font-semibold focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600
            @if($disabled) disabled hover:bg-none cursor-not-allowed @endif"
        @if(isset($id)) id="{{$id}}" @endif>

        @if($icon)
            <span class="@if(empty($slot)) pr-3 @endif"> {!! $icon !!}</span>
        @endif

        {{$slot}}
    </button>

@endif
