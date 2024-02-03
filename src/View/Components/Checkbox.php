<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Aalicki\FusionCoreUI\Fusion;
use Illuminate\View\Component;

class Checkbox extends Component
{

    /**
     * Is the checkbox checked by default?
     * @var bool|null
     */
    public ?bool $checked;

    /**
     * Side of the Label
     * right (Default) / left
     * @var string|null
     */
    public ?string $labelSide;

    /**
     * Color of label text
     * @var string|null
     */
    public ?string $labelColor;

    /**
     * Checkbox name for POST fetching
     * @var string|mixed|null
     */
    public ?string $name;

    /**
     * id of the radio input
     * @var string|mixed|null
     */
    public ?string $id;

    /**
     * Type / Color Theme
     * @var string|null
     */
    public ?string $type;

    /**
     * Default value when initial displayed
     * @var string|mixed|null
     */
    public ?string $value;

    public function __construct(
        $checked    = false,
        $labelSide  = 'right',
        $name       = null,
        $id         = null,
        $value      = null,
        $type       = 'default'
    ) {

        $this->checked      = $checked;
        $this->labelSide    = $labelSide;
        $this->name         = $name;
        $this->id           = $id;

        // Switch styles based on type of button
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

        $this->value        = $value;
    }

    public function render()
    {
        return view('fusion-core-ui::components.checkbox');
    }
}
