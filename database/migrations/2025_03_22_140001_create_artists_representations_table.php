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
        Schema::create('artists_representations', function (Blueprint $table) {
            
            // Basics Attributes
            $table->primary(['artist_id', 'representation_id']);

            // Foreign Attributes
            $table->foreignId('artist_id')->index()->constrained()->onDelete('cascade');
            $table->foreignId('representation_id')->index()->constrained()->onDelete('cascade');

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
        Schema::dropIfExists('artists_representations');
    }
};
