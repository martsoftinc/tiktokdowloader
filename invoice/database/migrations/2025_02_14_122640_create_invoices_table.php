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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
        
        $table->string('invoice_number');
        $table->string('client_name');
        $table->string('client_number');
        $table->text('client_address');
        $table->decimal('subtotal', 8, 2);
        $table->decimal('tax_percentage', 5, 2);
        $table->decimal('total', 8, 2);
        $table->string('payment_method');
        $table->string('payment_name');
        $table->string('bank_account_number');
        $table->string('bank_name');
        $table->string('bank_branch');
        $table->string('sender_company_name');
        $table->string('sender_company_number');
        $table->text('sender_company_address');
        $table->string('logo_path')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
