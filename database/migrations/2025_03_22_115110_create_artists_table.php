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
        Schema::create('artists', function (Blueprint $table) {

            // Basics Attributes
            $table->id();
            $table->string('name')->nullable();
            $table->text('bio')->nullable();


            // Foreign Attributes
            $table->foreignId('user_id')->index()->constrained()->onDelete('cascade');

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
        Schema::dropIfExists('artists');
    }
};
