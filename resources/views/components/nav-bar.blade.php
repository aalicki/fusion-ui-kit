<nav
    class="{{$classes}} {{$bg}} relative px-4 py-4 flex justify-between items-center
            @if($fullWidth) w-full @else border rounded-lg @endif">

    @if(isset($logo))
        {!! $logo !!}
    @endif

    @if(isset($mobileMenuIcon))
        <div class="lg:hidden">
            <x-fcui-button :icon="$mobileMenuIcon" class="fcui-mobile fcui-mobile flex items-center"></x-fcui-button>
        </div>
    @endif

    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        {{$links}}
    </ul>

    <div class="hidden lg:inline-block lg:ml-auto">
        {{$rightMenuButtons}}
    </div>
</nav>

<!-- Mobile -->
<div class="navbar-menu relative z-10 hidden">
    <div class="navbar-backdrop fixed inset-0 backdrop-blur-sm bg-black/10"></div>

    <nav
        class="fixed top-0 left-0 bottom-0 flex flex-col w-3/4 py-6 px-10 bg-cyan-700 overflow-y-auto">

        <div class="flex mb-8">

            @if(isset($logo))
                <div class="ml-1">
                    {!! $logo !!}
                </div>
            @endif

            <div class="navbar-close text-white/70 w-16 absolute -right-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </div>
        </div>

        <div>
            <ul class="space-y-6">
                {{$links}}
            </ul>
        </div>

        <div class="mt-auto">
            <div class="pt-4 text-center">
                {{$mobileFooter}}
            </div>
        </div>
    </nav>
</div>
