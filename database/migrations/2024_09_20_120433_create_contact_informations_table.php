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
        Schema::create('contact_informations', function (Blueprint $table) {
            $table->uuid('id')->primary()->index();
            $table->uuid('patient_id')->index(); // Adding patient_id column as a foreign key
            $table->string('number', 20);
            $table->string('email', 255)->nullable();
            $table->timestamps();

            //Setup key constraint
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_informations');
    }
};
