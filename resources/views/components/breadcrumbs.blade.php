<nav class="flex" aria-label="Breadcrumb">
    <div class="bg-cyan-600 rounded-full px-4 py-2 w-full">
    <ol role="list" class="flex items-center space-x-3">
        <li>
            <div>
                <a href="#" class="text-cyan-100 hover:text-cyan-300">
                    {!! $homeIcon !!}
                    <span class="sr-only">Home</span>
                </a>
            </div>
        </li>

        @foreach($linksArray as $link)
            <li>
                <div class="flex items-center">
                    <svg class="h-5 w-5 flex-shrink-0 text-cyan-900" viewBox="0 0 20 20" aria-hidden="true" fill="currentColor" >
                        <path d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" />
                    </svg>
                    <a href="{{$link['url']}}" class="ml-4 font-semibold text-cyan-100 hover:text-cyan-300">{{$link['label']}}</a>
                </div>
            </li>
        @endforeach
    </ol>
    </div>
</nav>
