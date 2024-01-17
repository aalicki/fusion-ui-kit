<?php

namespace Aalicki\FusionCoreUI;

use Aalicki\FusionCoreUI\View\Components\Alert;
use Aalicki\FusionCoreUI\View\Components\Avatar;
use Aalicki\FusionCoreUI\View\Components\Badge;
use Illuminate\Support\ServiceProvider;

class FusionCoreUIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/fusion-core-ui.php', 'fusion-core-ui'
        );

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'fusion-core-ui');

        // Components to make be available in Blade
        $viewComponents = [
            Alert::class,
            Avatar::class,
            Badge::class
        ];

        $this->loadViewComponentsAs('fusion-core-ui', $viewComponents);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views/themes/' => $this->app->resourcePath('views/vendor/fusion-core-ui/themes')
            ], 'fusion-core-ui-themes');
        }
    }

    public function register()
    {

    }
}
