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
        Schema::create('callback_pagamentos', function (Blueprint $table) {
            $table->id();
            $table->string('IdTransaction', 190)->nullable();
            $table->string('nome', 255);
            $table->string('valor_pago', 255);
            $table->string('code_status', 190)->nullable();
            $table->string('name_status', 190)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('callback_pagamentos');
    }
};
