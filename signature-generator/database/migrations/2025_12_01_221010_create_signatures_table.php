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
       Schema::create('signatures', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->nullable()->constrained(); // Caso queira salvar para logados
        $table->string('template_name')->default('classic'); // Qual design foi escolhido
        $table->jsonb('content'); // Aqui vai: { "name": "Fulano", "role": "Dev", "colors": {...} }
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signatures');
    }
};
