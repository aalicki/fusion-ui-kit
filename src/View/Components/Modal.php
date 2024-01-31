<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{

    public ?string $confirmBtn;
    public ?string $id;
    public ?string $icon;
    public ?bool $backdrop;
    public ?string $bg;
    public ?string $size;

    public function __construct(
        $confirmBtn = false,
        $id         = null,
        $icon       = null,
        $backdrop   = false,
        $bg         = null,
        $size       = 'default'
    ) {

        $this->confirmBtn = $confirmBtn;
        $this->id = $id;
        $this->icon = $icon;
        $this->backdrop = $backdrop;
        $this->bg = match ($bg) {
            'warning'   => 'bg-red-300 text-red-300/90 ring-1 ring-inset ring-red-300/70',
            'success'   => 'bg-green-400 text-green-700 border border-green-200',
            'info'      => 'bg-blue-300 text-blue-300/90 ring-1 ring-inset ring-blue-300/70',
            'notice'    => 'bg-yellow-300 text-yellow-300/90 ring-1 ring-inset ring-yellow-300/70',
            default     => 'bg-cyan-700 text-cyan-400 ring-1 ring-inset ring-cyan-300/70',
        };
        $this->size = match ($size) {
            'lg'    => 'text-2xl px-5 py-4 w-full',
            'md'    => 'text-lg px-4 py-3 w-2/4',
            'sm'    => 'text-sm px-1 py-1 w-1/4',
            default => 'text-base px-3 py-3 w-1/3',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.modal');
    }

}
