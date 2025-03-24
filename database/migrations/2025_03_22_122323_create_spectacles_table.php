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
        Schema::create('spectacles', function (Blueprint $table) {

            // Basics Attributes
            $table->id();

            // Foreign Attributes
            $table->foreignId('artist_id')->index()->constrained()->onDelete('cascade');

            // Secure Attributes
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spectacles');
    }
};
