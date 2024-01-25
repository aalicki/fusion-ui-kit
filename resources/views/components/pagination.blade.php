<div class="{{$bg}} p-4 flex items-center flex-wrap rounded-full">
    <nav>

        <ul class="inline-flex">
            @if($prevNextBtns)
            <li>
                <button
                    class="font-semibold px-4 py-2 text-cyan-500 bg-cyan-800 border border-r-0 border-cyan-500 rounded-l-full focus:shadow-outline hover:bg-cyan-700">
                    Prev
                </button>
            </li>
            @endif

            <li>
                <button class="px-4 py-2 text-cyan-500 bg-cyan-800 border border-r-0 border-cyan-500 focus:shadow-outline hover:bg-cyan-700">1</button>
            </li>
            <li>
                <button class="px-4 py-2 text-cyan-300 bg-cyan-950 border border-r-0 border-cyan-500 focus:shadow-outline hover:bg-cyan-700">2</button>
            </li>
            <li>
                <button
                    class="px-4 py-2 text-cyan-500 bg-cyan-800
                    @if($prevNextBtns) border border-r-0 border-cyan-500 @else border border-r-1 border-cyan-500 @endif
                    focus:shadow-outline hover:bg-cyan-700">3</button>
            </li>

            @if($prevNextBtns)
            <li>
                <button
                    class="font-semibold px-4 py-2 text-cyan-500 bg-cyan-800 border border-l border-cyan-500 rounded-r-full focus:shadow-outline hover:bg-cyan-700">
                    Next
                </button>
            </li>
            @endif
        </ul>
    </nav>
</div>
