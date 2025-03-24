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
        Schema::create('representations', function (Blueprint $table) {
            
             // Basics Attributes
             $table->id();
             $table->date('date');
             $table->time('start_time');
             $table->time('end_time');

             // Foreign Attributes
             $table->foreignId('rooms_id')->index()->constrained()->onDelete('cascade');
 
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
        Schema::dropIfExists('representations');
    }
};
