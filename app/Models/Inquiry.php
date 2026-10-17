<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model representing an export-import trade inquiry or Request for Quotation (RFQ).
 */
class Inquiry extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'company_name',
        'phone',
        'trade_type',
        'commodity_division',
        'incoterm',
        'cargo_volume',
        'origin_port',
        'destination_port',
        'notes',
        'status',
        'ip_address',
    ];

    /**
     * Available trade types.
     *
     * @var list<string>
     */
    public const TRADE_TYPES = ['export', 'import', 'freight_only', 'consulting'];

    /**
     * Standard Incoterms 2020.
     *
     * @var list<string>
     */
    public const INCOTERMS = ['FOB', 'CIF', 'CFR', 'EXW', 'DDP', 'FCA', 'CIP', 'DAP'];
}
