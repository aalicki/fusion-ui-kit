<div class="@if($border) border border-cyan-400 rounded-lg py-3 px-4 @endif">
    <div class="grid sm:grid-cols-{{$columns}} grid-cols-1 gap-3 items-center">
        {{$slot}}
    </div>
</div>
