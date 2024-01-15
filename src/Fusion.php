<?php

namespace Aalicki\FusionCoreUI;

use Illuminate\Support\Facades\File;

class Fusion
{

    public function __construct(
        public ?array $theme = null,
    ) {
        $this->theme = $this->getTheme();
    }

    /**
     * Get the Theme
     * As of now, FCUI Only has 1 theme planned.
     * @return mixed
     */
    private function getTheme()
    {

        $packageThemePath = __DIR__.'/../resources/views/themes/core.php';
        $localThemePath = base_path().'/resources/views/vendor/fusion-core-ui/themes/core.php';

        if (File::exists($localThemePath)) {
            $currentTheme = File::getRequire($localThemePath);
        } elseif (File::exists($packageThemePath)) {
            $currentTheme = File::getRequire($packageThemePath);
        } else {
            $currentTheme = File::getRequire(__DIR__.'/../resources/views/themes/core.php');
        }

        return $currentTheme;
    }

}
