<?php

namespace Aalicki\FusionCoreUI;

use Illuminate\Support\Facades\Facade;

class FusionCoreUIFacade extends Facade
{
    /**
     * Get the registered name of the components
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fusion-core-ui';
    }
}
