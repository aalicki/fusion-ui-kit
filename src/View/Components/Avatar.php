<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Avatar extends Component
{

    public ?string $img;

    public ?string $bgColor;

    public ?string $borderColor;

    /**
     * Size of the avatar
     * @var string|mixed|null
     */
    public ?string $size;

    public ?string $label;

    public function __construct(
        $img            = null,
        $bgColor        = 'default',
        $borderColor    = 'default',
        $size           = null,
        $label          = null
    ) {

        $this->img = $img;

        $this->bgColor = match ($bgColor) {
            'warning'   => 'bg-red-200/20 text-red-300/90',
            'success'   => 'bg-green-200/20 text-green-300/90',
            'info'      => 'bg-blue-300/20 text-blue-300/90 ring-1',
            'notice'    => 'bg-yellow-300/20 text-yellow-300/90',
            default     => 'bg-cyan-400/20 text-cyan-300/80',
        };

        $this->borderColor = match ($borderColor) {
            'warning'   => 'border border-red-500/80',
            'success'   => 'border border-green-500/80',
            'info'      => 'border border-blue-500/80',
            'notice'    => 'border border-yellow-500/80',
            default     => 'border border-cyan-500/80',
        };

        // Switch styles based on type of alert
        $this->size = match ($size) {
            'lg'    => 'h-28 w-28',
            'md'    => 'h-16 w-16',
            'sm'    => 'h-10 w-10',
            default => 'h-20 w-20',
        };

        $this->label = $label;
    }

    public function render()
    {
        return view('fusion-core-ui::components.avatar');
    }

}
