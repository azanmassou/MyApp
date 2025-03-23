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
        Schema::create('rooms', function (Blueprint $table) {

            // Basics Attributes
            $table->id();
            $table->integer('capacity');
            $table->string('type');

            // Foreign Attributes
            $table->foreignId('owner_id')->index()->nullable()->constrained()->onDelete('cascade');

            // Secure Attributes
            $table->boolean('status')->default(true);
            $table->timestamp('activated_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
