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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->string('imagem');
            $table->string('trailer_youtube');
            $table->string('link_jogo');
            $table->text('descricao');
            $table->string('tags');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogos');
    }
};
