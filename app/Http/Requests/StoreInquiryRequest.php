<?php

namespace App\Http\Requests;

use App\Models\Inquiry;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Validates incoming trade inquiries and Requests for Quotation (RFQ).
 */
class StoreInquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email:rfc,filter', 'max:150'],
            'company_name' => ['nullable', 'string', 'max:150'],
            'phone' => ['nullable', 'string', 'max:40'],
            'trade_type' => ['required', 'string', Rule::in(Inquiry::TRADE_TYPES)],
            'commodity_division' => ['nullable', 'string', 'max:150'],
            'incoterm' => ['nullable', 'string', 'max:20'],
            'cargo_volume' => ['nullable', 'string', 'max:100'],
            'origin_port' => ['nullable', 'string', 'max:150'],
            'destination_port' => ['nullable', 'string', 'max:150'],
            'notes' => ['nullable', 'string', 'max:3000'],
        ];
    }

    /**
     * Custom attribute names for validation errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'contact person name',
            'email' => 'business email',
            'company_name' => 'company name',
            'trade_type' => 'trade operation',
            'commodity_division' => 'commodity division',
            'cargo_volume' => 'estimated volume',
        ];
    }
}
