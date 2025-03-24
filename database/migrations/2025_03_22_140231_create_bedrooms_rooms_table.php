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
        Schema::create('bedrooms_rooms', function (Blueprint $table) {

            // Basics Attributes
            $table->primary(['bedrooms_id', 'rooms_id']);

            // Foreign Attributes
            $table->foreignId('bedrooms_id')->index()->constrained()->onDelete('cascade');
            $table->foreignId('rooms_id')->index()->constrained()->onDelete('cascade');

            // Secure Attributes
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bedrooms_rooms');
    }
};
