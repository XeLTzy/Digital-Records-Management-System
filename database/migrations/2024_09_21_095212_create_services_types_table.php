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
        Schema::create('services_types', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('categories_id')->index(); // Adding categories_id column as a foreign key
            $table->string('type',255)->nullable();
            $table->timestamps();

             //Setup key constraint
             $table->foreign('categories_id')->references('id')->on('services_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_types');
    }
};
