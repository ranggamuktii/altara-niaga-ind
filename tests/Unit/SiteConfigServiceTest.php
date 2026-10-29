<?php

namespace Tests\Unit;

use App\Services\SiteConfigService;
use Tests\TestCase;

class SiteConfigServiceTest extends TestCase
{
    private SiteConfigService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new SiteConfigService;
    }

    /**
     * Test service returns valid company array.
     */
    public function test_company_returns_expected_structure(): void
    {
        $company = $this->service->company();

        $this->assertIsArray($company);
        $this->assertArrayHasKey('name', $company);
        $this->assertArrayHasKey('tagline', $company);
        $this->assertArrayHasKey('email', $company);
        $this->assertArrayHasKey('phone', $company);
    }

    /**
     * Test service returns navigation list.
     */
    public function test_navigation_returns_items_with_labels_and_hrefs(): void
    {
        $navigation = $this->service->navigation();

        $this->assertIsArray($navigation);
        $this->assertNotEmpty($navigation);
        $this->assertArrayHasKey('label', $navigation[0]);
        $this->assertArrayHasKey('href', $navigation[0]);
    }

    /**
     * Test landingPageData contains all required keys.
     */
    public function test_landing_page_data_contains_all_components(): void
    {
        $data = $this->service->landingPageData();

        $expectedKeys = [
            'company',
            'navigation',
            'hero',
            'about',
            'services',
            'commodities',
            'fleet',
            'incoterms',
            'stats',
            'reach',
            'why_us',
            'inquiry',
            'cta',
            'footer',
        ];

        foreach ($expectedKeys as $key) {
            $this->assertArrayHasKey($key, $data, "Missing key [{$key}] in landingPageData");
        }
    }
}
