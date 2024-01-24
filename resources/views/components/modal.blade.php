<dialog class="{{$bg}} {{$size}} rounded-lg drop-shadow-2xl w-full sm:w-1/3 overscroll-y-contain"
        id="{{$id}}">

    @if(!$confirmBtn)
    <div class="w-full text-right -mr-2">
        <button autofocus class="relative close-modal-{{$id}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>
    </div>
    @endif

    @if(isset($icon))
        <div class="mx-auto text-center text-4xl mb-6 opacity-60">
            {!! $icon !!}
        </div>
    @endif

    {{$content}}

    @if($confirmBtn)
        <div class="mx-auto text-center border-t border-t-white/50 mt-6 pt-6">
            <x-fusion-core-ui-button size="default" class="close-modal-{{$id}}">Confirm</x-fusion-core-ui-button>
        </div>
    @endif
</dialog>

{{$triggerButton}}

<script>
    const dialog_{{$id}}        = document.getElementById({{$id}});
    const showButton_{{$id}}    = document.querySelector(".show-{{$id}}");
    const closeButton_{{$id}}   = document.querySelector(".close-modal-{{$id}}");

    showButton_{{$id}}.addEventListener("click", () => {
        {{$id}}.showModal();
    });

    closeButton_{{$id}}.addEventListener("click", () => {
        {{$id}}.close();
    });
</script>

@if($backdrop)
<style>
    dialog::backdrop {
        background-color:rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(3px);
    }
</style>
@endif
