<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    public ?string $type;
    public ?string $name;
    public ?string $value;
    public ?string $id;
    public ?string $label;
    public ?string $tip;
    public ?string $placeholder;
    public ?string $size;
    public ?string $color;
    public ?string $icon;
    public ?bool $disabled;

    public function __construct(

        $type           = 'text',
        $name           = null,
        $value          = null,
        $id             = null,
        $label          = null,
        $tip            = null,
        $placeholder    = null,
        $size           = null,
        $color          = null,
        $icon           = null,
        $disabled       = false
    ) {

        $this->type         = $type;
        $this->name         = $name;
        $this->value        = $value;
        $this->id           = $id;
        $this->label        = $label;
        $this->tip          = $tip;
        $this->placeholder  = $placeholder;
        $this->size         = match ($size) {
            'lg' => 'text-2xl px-5 py-4',
            'md' => 'text-lg px-4 py-3',
            'sm' => 'text-sm py-1',
            default => 'py-1.5',
        };
        $this->color        = match ($color) {
            'warning'   => 'bg-red-300/20 text-red-200 ring-red-300/70 placeholder:text-red-300/50 focus:ring-red-400',
            'success'   => 'bg-green-300/20 text-green-200 ring-green-300/70 placeholder:text-green-300/50 focus:ring-green-400',
            'info'      => 'bg-blue-300/20 text-blue-200 ring-blue-300/70 placeholder:text-blue-300/50 focus:ring-blue-400',
            'notice'    => 'bg-yellow-300/20 text-yellow-200 ring-yellow-300/70 placeholder:text-yellow-300/50 focus:ring-yellow-400',
            default     => 'bg-cyan-600 text-cyan-200 ring-cyan-300/70 placeholder:text-cyan-300/50 focus:ring-cyan-400',
        };
        $this->icon         = $icon;
        $this->disabled     = $disabled;
    }

    public function render()
    {
        return view('fusion-core-ui::components.input');
    }

}
