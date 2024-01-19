<button
    type="button"
    class="{{$size}} {{$type}} rounded-full font-semibold
            focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
    @if($icon)
        <span class="@if(empty($slot)) pr-3 @endif"> {!! $icon !!}</span>
    @endif

    {{$slot}}
</button>
