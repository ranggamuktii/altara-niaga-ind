<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    /**
     * Test the landing page renders with 200 OK and expected content.
     */
    public function test_landing_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(config('site.company.name'));
        $response->assertSee(config('site.company.tagline'));
    }

    /**
     * Test all major export-import architectural sections are present in DOM.
     */
    public function test_landing_page_contains_all_core_sections(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('id="home"', false);
        $response->assertSee('id="simulator"', false);
        $response->assertSee('id="fleet-dispatch"', false);
        $response->assertSee('id="about"', false);
        $response->assertSee('id="services"', false);
        $response->assertSee('id="commodities"', false);
        $response->assertSee('id="incoterms"', false);
        $response->assertSee('id="reach"', false);
        $response->assertSee('id="why-us"', false);
        $response->assertSee('id="rfq"', false);
        $response->assertSee('id="contact"', false);
    }
}
