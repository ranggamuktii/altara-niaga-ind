<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InquiryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test successful RFQ submission via form redirect.
     */
    public function test_user_can_submit_trade_inquiry_via_form(): void
    {
        $payload = [
            'name' => 'Hermann Lindqvist',
            'email' => 'procurement@nordictrade.se',
            'company_name' => 'Nordic Commodities AB',
            'phone' => '+46 8 123 4567',
            'trade_type' => 'import',
            'commodity_division' => 'Agri-Commodities & Food Ingredients',
            'incoterm' => 'CIF',
            'cargo_volume' => '4x 40ft HC',
            'origin_port' => 'Tanjung Priok',
            'destination_port' => 'Gothenburg',
            'notes' => 'Grade 1 Arabica coffee bean supply inquiry.',
        ];

        $response = $this->post(route('inquiry.store'), $payload);

        $response->assertStatus(302);
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('inquiries', [
            'email' => 'procurement@nordictrade.se',
            'company_name' => 'Nordic Commodities AB',
            'trade_type' => 'import',
            'incoterm' => 'CIF',
        ]);
    }

    /**
     * Test JSON API response for AJAX submission.
     */
    public function test_ajax_inquiry_returns_json_with_rfq_reference(): void
    {
        $payload = [
            'name' => 'Captain Zhang Wei',
            'email' => 'freight@cosco-shanghai.cn',
            'company_name' => 'Shanghai Maritime Corp',
            'trade_type' => 'export',
            'commodity_division' => 'Minerals, Metal Ores & Energy',
            'incoterm' => 'FOB',
            'cargo_volume' => '25,000 MT Bulk Handymax',
        ];

        $response = $this->postJson(route('inquiry.store'), $payload);

        $response->assertStatus(201);
        $response->assertJsonStructure([
            'success',
            'message',
            'reference_id',
        ]);
        $response->assertJson([
            'success' => true,
        ]);
    }

    /**
     * Test validation requires name, valid email, and trade_type.
     */
    public function test_inquiry_requires_mandatory_fields(): void
    {
        $response = $this->post(route('inquiry.store'), [
            'name' => '',
            'email' => 'invalid-email-address',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'trade_type']);
        $this->assertDatabaseCount('inquiries', 0);
    }
}
