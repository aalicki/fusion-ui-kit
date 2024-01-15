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

    public function __construct(
        $dismissible = null,
        $icon = null
    ) {
        $this->dismissible = $dismissible;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('fusion-core-ui::components.alert');
    }
}
