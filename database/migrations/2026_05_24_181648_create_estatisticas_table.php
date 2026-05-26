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
        Schema::create('estatisticas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jogador_id')->constrained();
            $table->integer('gols')->default(0);
            $table->integer('assistencias')->default(0);
            $table->integer('jogos')->defaut(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estatisticas');
    }
};
