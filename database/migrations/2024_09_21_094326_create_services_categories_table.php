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
        Schema::create('services_categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('service_id')->index(); // Adding service_id column as a foreign key
            $table->string('category',255)->nullable();
            $table->timestamps();

             //Setup key constraint
             $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_categories');
    }
};
