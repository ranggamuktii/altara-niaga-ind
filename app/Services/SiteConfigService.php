<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;

/**
 * Centralized service for accessing site-wide configuration.
 *
 * Wraps config('site.*') access with typed methods to prevent
 * scattered config() calls throughout views and controllers.
 */
class SiteConfigService
{
    /**
     * Get a site configuration value.
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return Config::get("site.{$key}", $default);
    }

    /**
     * Get company identity data.
     *
     * @return array<string, mixed>
     */
    public function company(): array
    {
        return $this->get('company', []);
    }

    /**
     * Get navigation items.
     *
     * @return array<int, array{label: string, href: string}>
     */
    public function navigation(): array
    {
        return $this->get('navigation', []);
    }

    /**
     * Get commodity/product divisions.
     *
     * @return array<string, mixed>
     */
    public function commodities(): array
    {
        return $this->get('commodities', []);
    }

    /**
     * Get fleet infrastructure configuration.
     *
     * @return array<string, mixed>
     */
    public function fleet(): array
    {
        return $this->get('fleet', []);
    }

    /**
     * Get Incoterms framework specs.
     *
     * @return array<string, mixed>
     */
    public function incoterms(): array
    {
        return $this->get('incoterms', []);
    }

    /**
     * Get RFQ inquiry configuration.
     *
     * @return array<string, mixed>
     */
    public function inquiry(): array
    {
        return $this->get('inquiry', []);
    }

    /**
     * Get a specific section's configuration.
     */
    public function section(string $name): array
    {
        return $this->get($name, []);
    }

    /**
     * Get all sections needed for the landing page.
     *
     * @return array<string, mixed>
     */
    public function landingPageData(): array
    {
        return [
            'company' => $this->company(),
            'navigation' => $this->navigation(),
            'hero' => $this->section('hero'),
            'about' => $this->section('about'),
            'services' => $this->section('services'),
            'commodities' => $this->commodities(),
            'fleet' => $this->fleet(),
            'incoterms' => $this->incoterms(),
            'stats' => $this->section('stats'),
            'reach' => $this->section('reach'),
            'why_us' => $this->section('why_us'),
            'inquiry' => $this->inquiry(),
            'cta' => $this->section('cta'),
            'footer' => $this->section('footer'),
        ];
    }
}
