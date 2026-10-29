<?php

namespace App\ViewComposers;

use App\Services\SiteConfigService;
use Illuminate\View\View;

/**
 * Injects shared navigation and company brand data into layout and header/footer views.
 * Decouples controllers from having to manually pass global site identity.
 */
class NavigationComposer
{
    public function __construct(
        private readonly SiteConfigService $siteConfig,
    ) {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with([
            'siteCompany' => $this->siteConfig->company(),
            'siteNavigation' => $this->siteConfig->navigation(),
        ]);
    }
}
