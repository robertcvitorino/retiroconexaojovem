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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->date('data_nascimento');
            $table->string('cpf', 14)->unique();
            $table->text('endereco');
            $table->string('nome_responsavel');
            $table->string('telefone_responsavel', 20);
            $table->string('nome_outro_responsavel')->nullable();
            $table->string('telefone_outro_responsavel', 20)->nullable();
            $table->text('endereco_completo');
            $table->text('restricao_alimentar')->nullable();
            $table->text('medicamento_uso')->nullable();
            $table->text('alergia')->nullable();
            $table->text('pcd_laudo')->nullable();
            $table->boolean('autorizacao_uso_imagem')->default(false);
            $table->string('tamanho_camiseta', 10);
            $table->string('como_ficou_sabendo', 150)->nullable();
            $table->string('comunidade', 150)->nullable();
            $table->string('foto_passageiro')->nullable();
            $table->string('forma_pagamento', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
