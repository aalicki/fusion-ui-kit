<li
    class="w-full px-10 pt-16 pb-8 {{$type}} rounded-lg relative
            @if($hoverEffect) hover:scale-105 transition-all duration-300 ease-in @endif">

    @if(isset($specialText))
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 rounded-br-xl rounded-bl-xl
                    text-cyan-100 px-8 py-2 bg-cyan-500 font-bold">
            {{$specialText}}
        </div>
    @endif

    <h1 class="text-center font-semibold text-lg tracking-wide mb-2">
        {{$productName}}
    </h1>

    <p class="text-center tracking-tighter block mb-14">
        <span class="text-4xl font-bold">{{$price}}</span>
        <span class="text-center">{{$recurring}}</span>
    </p>

    {{$button}}

    <ol class="mt-6 list-disc w-4/5 mx-auto font-semibold text-sm space-y-1">
        {{$features}}
    </ol>
</li>
