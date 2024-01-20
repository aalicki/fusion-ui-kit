<div class="bg-cyan-950 px-6 py-24 sm:py-16 lg:px-8">
    <div class="max-w-full {{$alignment}}">
        <h2 class="text-3xl font-bold tracking-tight text-cyan-500 sm:text-6xl">{{$slot}}</h2>

        @if(isset($subheading))
            <p class="mt-3 text-lg leading-4 text-cyan-600">
                {{$subheading}}
            </p>
        @endif
    </div>
</div>
