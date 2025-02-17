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
        Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('invoice_id');
        $table->string('product_name');
        $table->decimal('price', 8, 2);
        $table->integer('quantity');
        $table->decimal('total', 8, 2);
        $table->timestamps();

        // Foreign key constraint
        $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
