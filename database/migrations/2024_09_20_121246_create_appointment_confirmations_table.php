<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment_confirmations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('appointment_id')->index(); // Adding appointment_id column as a foreign key
            $table->string('code',15)->unique();
            $table->timestamps();

            // Setting up the foreign key constraint
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_confirmations');
    }
};
