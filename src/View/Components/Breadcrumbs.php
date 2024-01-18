<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{

    /**
     * Icon to represent the Home page
     * @var string|mixed|null
     */
    public ?string $homeIcon;

    /**
     * Array of Links to supply as Breadcrumbs
     * @var array|mixed|null
     */
    public ?array $linksArray;

    public function __construct(
        $homeIcon   = '<i class="fa-solid fa-house"></i>',
        $linksArray = null
    ) {

        $this->homeIcon     = $homeIcon;
        $this->linksArray   = $linksArray;

    }

    public function render()
    {
        return view('fusion-core-ui::components.breadcrumbs');
    }

}
