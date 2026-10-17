<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Models\Inquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Store a new trade inquiry / RFQ.
     */
    public function store(StoreInquiryRequest $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validated();
        $validated['ip_address'] = $request->ip();
        $validated['status'] = 'new';

        $inquiry = Inquiry::create($validated);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you. Your Request for Quotation (RFQ) has been recorded. Our trade specialist will review your cargo requirements and respond within 24 business hours.',
                'reference_id' => sprintf('RFQ-%05d', $inquiry->id),
            ], 201);
        }

        return redirect()->to(url()->previous() . '#contact')
            ->with('success', 'Your trade inquiry has been received with reference #' . sprintf('RFQ-%05d', $inquiry->id) . '. Our trade desk will contact you promptly.');
    }
}
