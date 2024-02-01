<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class NavBar extends Component
{

    /**
     * Background and color Theme
     * @var string|null
     */
    public ?string $bg;

    /**
     * Home page logo
     * @var string|mixed|null
     */
    public ?string $logo;

    /**
     * If Navbar is full width
     * True / False
     * @var bool|mixed|null
     */
    public ?bool $fullWidth;

    /**
     * Right-side menu buttons
     * @var string|mixed|null
     */
    public ?string $rightMenuButtons;

    /**
     * Icon to show for smaller screens
     * @var string|mixed|null
     */
    public ?string $mobileMenuIcon;

    /**
     * Footer content for smaller screens
     * @var string|mixed|null
     */
    public ?string $mobileFooter;

    /**
     * Additional classes to be applied to component
     * @var string|mixed|null
     */
    public ?string $classes;

    public function __construct(
        $bg                 = null,
        $logo               = null,
        $fullWidth          = false,
        $rightMenuButtons   = null,
        $mobileMenuIcon     = null,
        $mobileFooter       = null,
        $classes            = null,
    ) {

        $this->bg = match ($bg) {
            'transparent'   => 'border-0 bg-none',
            'warning'       => 'bg-red-200/20 text-red-300/90 border-red-300/60',
            'success'       => 'bg-green-200/20 text-green-300/90 border-green-300/60',
            'info'          => 'bg-blue-300/20 text-blue-300/90 border-blue-400/60',
            'notice'        => 'bg-yellow-300/20 text-yellow-300/90 border-yellow-300/60',
            default         => 'bg-cyan-200/20 text-cyan-300/80 border-cyan-300/60',
        };
        $this->logo             = $logo;
        $this->fullWidth        = $fullWidth;
        $this->rightMenuButtons = $rightMenuButtons;
        $this->mobileMenuIcon   = $mobileMenuIcon;
        $this->mobileFooter     = $mobileFooter;
        $this->classes          = $classes;
    }

    public function render()
    {
        return view('fusion-core-ui::components.nav-bar');
    }
}
