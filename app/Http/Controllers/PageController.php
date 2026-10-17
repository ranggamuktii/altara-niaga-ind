<?php

namespace App\Http\Controllers;

use App\Services\SiteConfigService;
use Illuminate\View\View;

class PageController extends Controller
{
    public function __construct(
        private readonly SiteConfigService $siteConfig,
    ) {}

    /**
     * Display the landing page.
     */
    public function home(): View
    {
        return view('pages.home', $this->siteConfig->landingPageData());
    }
}

