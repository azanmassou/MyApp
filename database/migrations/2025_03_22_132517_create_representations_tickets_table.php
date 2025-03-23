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
        Schema::create('representations_tickets', function (Blueprint $table) {
            
            // Basics Attributes
            $table->primary(['ticket_id', 'representation_id']);
            $table->decimal('cost', 8, 2); 
            $table->integer('nb_vendus')->default(0);

            // Foreign Attributes
            $table->foreignId('ticket_id')->index()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('representations_tickets');
    }
};
