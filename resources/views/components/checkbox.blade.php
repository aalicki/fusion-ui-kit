@if($labelSide == 'left')
    <label
        for="{{$id}}"
        class="inline-block hover:cursor-pointer">

        <span class="pr-2 {{$labelColor}}">{{$slot}}</span>
    </label>
@endif

<input
    id="{{$id}}"
    class="h-4 w-4 rounded {{$type}}"
    type="checkbox"
    @if(isset($value)) value="{{$value}}" @endif
    @if($checked) checked @endif
    >

@if($labelSide == 'right')
    <label
        for="{{$id}}"
        class="inline-block hover:cursor-pointer">

        <span class="pl-2 {{$labelColor}}">{{$slot}}</span>
    </label>
@endif

