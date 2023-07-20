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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('descricao', 255);
            $table->string('preco', 255);
            $table->string('categoria', 255)->nullable();
            $table->string('subcategoria', 255)->nullable();
            $table->string('marca', 255);
            $table->string('estoque', 255);
            $table->string('tamanho', 255);
            $table->string('cor', 255);
            $table->text('imagem');
            $table->text('imagem2');
            $table->text('imagem3');
            $table->text('imagem4');
            $table->text('imagem5');
            $table->text('imagem6');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
