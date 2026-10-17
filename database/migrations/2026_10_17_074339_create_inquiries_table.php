<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('company_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('trade_type')->default('export'); // export, import, freight_only, consulting
            $table->string('commodity_division')->nullable();
            $table->string('incoterm')->nullable(); // FOB, CIF, CFR, EXW, DDP
            $table->string('cargo_volume')->nullable();
            $table->string('origin_port')->nullable();
            $table->string('destination_port')->nullable();
            $table->text('notes')->nullable();
            $table->string('status')->default('new'); // new, in_review, quoted, archived
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
