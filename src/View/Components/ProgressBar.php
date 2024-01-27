<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class ProgressBar extends Component
{

    public ?string $type;
    public ?string $innerBarBg;
    public ?int $completion;
    public ?int $height;

    public function __construct(
        $type       = 'default',
        $innerBarBg = 'default',
        $completion = 0,
        $height     = 4,
    ) {
        $this->type = match ($type) {
            'warning'   => 'bg-red-700/70 text-red-300/90 border-red-300/60',
            'success'   => 'bg-green-700/70 text-green-300/90 border-green-300/60',
            'info'      => 'bg-blue-700/70 text-blue-300/90 border-blue-400/60',
            'notice'    => 'bg-yellow-700/70 text-yellow-300/90 border-yellow-300/60',
            default     => 'bg-cyan-700/80 text-cyan-300/80 border-cyan-300/60',
        };

        $this->innerBarBg = match ($innerBarBg) {
            'warning'   => 'bg-red-600',
            'success'   => 'bg-green-600',
            'info'      => 'bg-blue-600',
            'notice'    => 'bg-yellow-600',
            default     => 'bg-cyan-400',
        };

        $this->completion   = $completion;
        $this->height       = $height;
    }

    public function render()
    {
        return view('fusion-core-ui::components.progress-bar');
    }

}
