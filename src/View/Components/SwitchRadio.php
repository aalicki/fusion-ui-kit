<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Aalicki\FusionCoreUI\Fusion;
use Illuminate\View\Component;

class SwitchRadio extends Component
{

    /**
     * Background color
     * @var string|null
     */
    public ?string $bg;

    /**
     * id of the radio input
     * @var string|mixed|null
     */
    public ?string $id;

    /**
     * Color of the circle dial / indicator
     * @var string|null
     */
    public ?string $dialBg;

    /**
     * Value of the radio input
     * @var string|null
     */
    public ?string $value;

    public function __construct(
        $bg     = 'default',
        $id     = null,
        $value  = null
    ) {

        $this->bg = match ($bg) {
            'transparent'   => 'border-0 bg-none',
            'warning'       => 'bg-red-400/20',
            'success'       => 'bg-green-400/20',
            'info'          => 'bg-blue-400/20',
            'notice'        => 'bg-yellow-400/20',
            default         => 'bg-cyan-600/20',
        };

        $this->dialBg = match ($bg) {
            'warning'       => 'bg-red-600/70 peer-checked:bg-red-300',
            'success'       => 'bg-green-600/70 peer-checked:bg-green-300',
            'info'          => 'bg-blue-600/70 peer-checked:bg-blue-300',
            'notice'        => 'bg-yellow-600/70 peer-checked:bg-yellow-300',
            default         => 'bg-cyan-600/70 peer-checked:bg-cyan-300',
        };

        $this->id       = $id;
        $this->value    = $value;
    }

    public function render()
    {
        return view('fusion-core-ui::components.switch');
    }
}
