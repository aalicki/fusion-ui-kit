<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Aalicki\FusionCoreUI\Fusion;
use Illuminate\View\Component;

class StatBlock extends Component
{

    /**
     * Stat or Metric
     * @var string|mixed|null
     */
    public ?string $stat;

    /**
     * Text label for the stat
     * @var string|mixed|null
     */
    public ?string $label;

    /**
     * Color / UI Theme of stat block
     * @var string|null
     */
    public ?string $type;

    public function __construct(
        $stat   = null,
        $label  = null,
        $type   = 'default',
    ) {

        $this->stat     = $stat;
        $this->label    = $label;
        $this->type     = match ($type) {
            'warning'   => 'bg-red-700/70 text-red-300/90 border-red-300/60',
            'success'   => 'bg-green-700/70 text-green-300/90 border-green-300/60',
            'info'      => 'bg-blue-700/70 text-blue-300/90 border-blue-400/60',
            'notice'    => 'bg-yellow-700/70 text-yellow-300/90 border-yellow-300/60',
            default     => 'bg-cyan-800/80 text-cyan-300/80 border-cyan-300/60',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.stat-block');
    }
}
