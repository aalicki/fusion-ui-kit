@if(isset($href))

    <a
        href="{{$href}}"
        class="{{$size}} {{$type}} rounded-full font-semibold
            focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600">
        @if($icon)
            <span class="@if(empty($slot)) pr-3 @endif"> {!! $icon !!}</span>
        @endif

        {{$slot}}
    </a>

@else

    <button
        type="{{$btnType}}"
        class="{{$size}} {{$type}} rounded-full font-semibold
            focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600">
        @if($icon)
            <span class="@if(empty($slot)) pr-3 @endif"> {!! $icon !!}</span>
        @endif

        {{$slot}}
    </button>

@endif
