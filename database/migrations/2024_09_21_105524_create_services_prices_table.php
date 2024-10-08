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
        Schema::create('services_prices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('type_id')->index(); // Adding types_id column as a foreign key
            $table->decimal('price', 8, 2); // up to 999,999.99
            $table->timestamps();

             //Setup key constraint
             $table->foreign('type_id')->references('id')->on('services_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_prices');
    }
};
