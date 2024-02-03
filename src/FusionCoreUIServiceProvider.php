<?php

namespace Aalicki\FusionCoreUI;

use Aalicki\FusionCoreUI\View\Components\Alert;
use Aalicki\FusionCoreUI\View\Components\Avatar;
use Aalicki\FusionCoreUI\View\Components\Badge;
use Aalicki\FusionCoreUI\View\Components\Breadcrumbs;
use Aalicki\FusionCoreUI\View\Components\Button;
use Aalicki\FusionCoreUI\View\Components\ButtonGroup;
use Aalicki\FusionCoreUI\View\Components\Card;
use Aalicki\FusionCoreUI\View\Components\DropDown;
use Aalicki\FusionCoreUI\View\Components\Heading;
use Aalicki\FusionCoreUI\View\Components\Input;
use Aalicki\FusionCoreUI\View\Components\InputGroup;
use Aalicki\FusionCoreUI\View\Components\ListGroup;
use Aalicki\FusionCoreUI\View\Components\Modal;
use Aalicki\FusionCoreUI\View\Components\NavBar;
use Aalicki\FusionCoreUI\View\Components\NavLink;
use Aalicki\FusionCoreUI\View\Components\Pagination;
use Aalicki\FusionCoreUI\View\Components\Pricing;
use Aalicki\FusionCoreUI\View\Components\PricingPanel;
use Aalicki\FusionCoreUI\View\Components\ProgressBar;
use Aalicki\FusionCoreUI\View\Components\StatBlock;
use Aalicki\FusionCoreUI\View\Components\Stats;
use Aalicki\FusionCoreUI\View\Components\SwitchRadio;
use Aalicki\FusionCoreUI\View\Components\Tab;
use Aalicki\FusionCoreUI\View\Components\Table;
use Aalicki\FusionCoreUI\View\Components\TableRow;
use Aalicki\FusionCoreUI\View\Components\Tabs;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\In;
use PhpParser\Node\Expr\AssignOp\Mod;

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
            Badge::class,
            Breadcrumbs::class,
            Button::class,
            ButtonGroup::class,
            Card::class,
            DropDown::class,
            Heading::class,
            Input::class,
            InputGroup::class,
            ListGroup::class,
            NavLink::class,
            Modal::class,
            NavBar::class,
            Pagination::class,
            Pricing::class,
            PricingPanel::class,
            ProgressBar::class,
            Stats::class,
            StatBlock::class,
            SwitchRadio::class,
            Table::class,
            TableRow::class,
            Tab::class,
            Tabs::class
        ];

        $this->loadViewComponentsAs('fcui', $viewComponents);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views/themes/' => $this->app->resourcePath('views/vendor/fusion-core-ui/themes')
            ], 'fusion-core-ui-themes');
            $this->publishes([
                __DIR__.'/../resources/js/' => public_path('storage/vendor/fusion-core-ui/')
            ], 'fusion-core-js');
        }
    }

    public function register()
    {

    }
}
