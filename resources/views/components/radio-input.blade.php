<div class="flex items-center">
    <input
        id="{{$id}}"
        name="{{$name}}"
        type="radio"
        class="h-4 w-4 {{$type}}"
        @if($checked) checked @endif >

    <label
        for="{{$id}}"
        class="ml-3 block font-medium {{$labelColor}}">
        {{$slot}}
    </label>
</div>
