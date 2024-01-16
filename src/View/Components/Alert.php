<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    /**
     * Is the alert dismissible? Will show an "X" icon
     * @var bool|null
     */
    public ?bool $dismissible;

    /**
     * Icon displayed to the left of the text
     * @var string|mixed|null
     */
    public ?string $icon;

    public ?string $type;

    public function __construct(
        $dismissible = null,
        $type = 'default',
        $icon = null,
    ) {
        $this->dismissible = $dismissible;

        // Switch styles based on type of alert
        $this->type = match ($type) {
            'warning' => 'bg-red-200/20 text-red-300/90 border-red-300/60',
            'success' => 'bg-green-200/20 text-green-300/90 border-green-300/60',
            'info' => 'bg-blue-300/20 text-blue-300/90 border-blue-400/60',
            'notice' => 'bg-yellow-300/20 text-yellow-300/90 border-yellow-300/60',
            default => 'bg-cyan-200/20 text-cyan-300/80 border-cyan-300/60',
        };

        $this->icon = $icon;
    }

    public function render()
    {
        return view('fusion-core-ui::components.alert');
    }

    private function setType()
    {
        return match ($this->type) {
            'warning' => 'bg-red-200/50',
            default => 'bg-cyan-200/50',
        };
    }
}
