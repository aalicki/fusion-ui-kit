<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Aalicki\FusionCoreUI\Fusion;
use Illuminate\View\Component;

class ProgressBar extends Component
{

    /**
     * Color / UI Theme for progress bar
     * @var string|null
     */
    public ?string $type;

    /**
     * Color of the inner progress bar
     * @var string|null
     */
    public ?string $innerBarBg;

    /**
     * % of complete, max 100, minimum 0
     * @var int|mixed|null
     */
    public ?int $completion;

    /**
     * Height of the progress bar
     * @var int|mixed|null
     */
    public ?int $height;

    public function __construct(
        $type       = null,
        $innerBarBg = null,
        $completion = 0,
        $height     = 2,
    ) {
        $this->type = match ($type) {
            'warning'   => 'bg-red-700/30',
            'success'   => 'bg-green-700/70',
            'info'      => 'bg-blue-700/70',
            'notice'    => 'bg-yellow-700/70',
            default     => 'bg-cyan-700/80',
        };

        $this->innerBarBg = match ($innerBarBg) {
            'warning'   => 'bg-red-600',
            'success'   => 'bg-green-600',
            'info'      => 'bg-blue-600',
            'notice'    => 'bg-yellow-600',
            default     => 'bg-cyan-600',
        };

        $this->completion   = $completion;
        $this->height       = $height;
    }

    public function render()
    {
        return view('fusion-core-ui::components.progress-bar');
    }

}
