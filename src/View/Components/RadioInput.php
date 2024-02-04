<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Aalicki\FusionCoreUI\Fusion;
use Illuminate\View\Component;

class RadioInput extends Component
{

    /**
     * Is checked by default
     * @var bool|null
     */
    public ?bool $checked;

    /**
     * Background color
     * @var string|null
     */
    public ?string $type;

    /**
     * Color of label text
     * @var string|null
     */
    public ?string $labelColor;

    /**
     * Name used for POST fetching
     * @var string|null
     */
    public ?string $name;

    /**
     * id of the radio input
     * @var string|mixed|null
     */
    public ?string $id;

    public function __construct(
        $checked    = false,
        $type       = 'default',
        $name       = null,
        $id         = null,
    ) {

        $this->checked  = $checked;
        $this->name     = $name;
        $this->type = match ($type) {
            'warning'   => 'bg-red-300/40 text-red-300/90 hover:bg-red-400/80 focus:ring-red-600',
            'success'   => 'bg-green-300/40 text-green-300/90 hover:bg-green-300/80 focus:ring-green-600',
            'info'      => 'bg-blue-300/40 text-blue-300/90 hover:bg-blue-400/80 focus:ring-blue-600',
            'notice'    => 'bg-yellow-300/40 text-yellow-300/90 hover:bg-yellow-400/80 focus:ring-yellow-600',
            default     => 'bg-cyan-300/40 text-cyan-300/90 hover:bg-cyan-500 focus:ring-cyan-600',
        };

        $this->labelColor = match($type) {
            'warning'   => 'text-red-300/90',
            'success'   => 'text-green-300/90',
            'info'      => 'text-blue-300/90',
            'notice'    => 'text-yellow-300/90',
            default     => 'text-cyan-300/90',
        };

        $this->id = $id;
    }

    public function render()
    {
        return view('fusion-core-ui::components.radio-input');
    }
}
