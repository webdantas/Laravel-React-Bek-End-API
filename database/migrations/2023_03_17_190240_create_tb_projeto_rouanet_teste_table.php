<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_projeto_rouanet_teste', function (Blueprint $table) {
            $table->unsignedInteger('id_projeto')->primary();
            $table->string('pronac', 191)->index('idx_pronac');
            $table->string('ano_projeto', 191);
            $table->string('nome', 191)->fulltext('nome_3');
            $table->string('segmento', 191);
            $table->string('area', 191);
            $table->string('uf', 191);
            $table->string('municipio', 191)->index('idx_cidade');
            $table->string('data_inicio', 191);
            $table->string('data_termino', 191);
            $table->string('situacao', 191);
            $table->string('mecanismo', 191);
            $table->string('enquadramento', 191);
            $table->string('valor_captado', 191);
            $table->string('valor_aprovado', 191)->index('idx_valor_projeto');
            $table->text('acessibilidade');
            $table->text('objetivos')->nullable();
            $table->text('justificativa')->nullable();
            $table->text('etapa')->nullable();
            $table->text('ficha_tecnica');
            $table->text('impacto_ambiental');
            $table->text('especificacao_tecnica');
            $table->text('providencia')->nullable();
            $table->text('democratizacao');
            $table->text('sinopse');
            $table->text('resumo');
            $table->timestamps();
            $table->string('valor_projeto', 100);
            $table->string('outras_fontes', 100);
            $table->string('valor_proposta', 100);
            $table->string('valor_solicitado', 100);
            $table->longText('objetivo');
            $table->longText('estrategia_execucao');
            $table->string('link_incentivadores');

            $table->index(['area', 'uf', 'municipio', 'nome', 'segmento'], 'filtros');
            $table->fullText(['nome', 'segmento'], 'nome');
            $table->fullText(['nome', 'resumo'], 'nome_2');
            $table->fullText(['nome', 'resumo', 'objetivo'], 'nome_4');
            $table->index(['id_projeto'], 'tb_projeto_rouanet_id_projeto_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_projeto_rouanet_teste');
    }
};
