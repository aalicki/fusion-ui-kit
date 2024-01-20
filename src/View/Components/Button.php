<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Button extends Component
{

    /**
     * Icon
     * @var string|mixed|null
     */
    public ?string $icon;

    public ?string $size;

    public ?string $type;

    public ?string $btnType;

    public ?string $href;

    public function __construct(
        $icon = null,
        $size = null,
        $type = null,
        $btnType = 'button', //submit, reset, button (default)
        $href = null,
    ) {

        $this->icon = $icon;

        // Switch styles based on type of alert
        $this->size = match ($size) {
            'lg' => 'text-2xl px-5 py-4',
            'md' => 'text-lg px-4 py-3',
            'sm' => 'text-sm px-1 py-1',
            default => 'text-base px-2 py-1',
        };

        // Switch styles based on type of alert
        $this->type = match ($type) {
            'warning' => 'bg-red-300/20 text-red-300/90 ring-1 ring-inset ring-red-300/70 hover:bg-red-400/40',
            'success' => 'bg-green-300/20 text-green-300/90 ring-1 ring-inset ring-green-300/70 hover:bg-green-400/40',
            'info' => 'bg-blue-300/20 text-blue-300/90 ring-1 ring-inset ring-blue-300/70 hover:bg-blue-400/40',
            'notice' => 'bg-yellow-300/20 text-yellow-300/90 ring-1 ring-inset ring-yellow-300/70 hover:bg-yellow-400/40',
            default => 'bg-cyan-600 text-white ring-1 ring-inset ring-cyan-300/70 hover:bg-cyan-500',
        };

        $this->btnType = $btnType;

        $this->href = $href;
    }

    public function render()
    {
        return view('fusion-core-ui::components.button');
    }

}
