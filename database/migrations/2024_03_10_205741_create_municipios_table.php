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
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string("razao_social");
            $table->string("nome_fantasia")->nullable();
            $table->string("cnpj")->unique();
            $table->string("logradouro");
            $table->string("numero");
            $table->string("bairro");
            $table->string("complemento")->nullable();
            $table->string("cidade");
            $table->string("estado");
            $table->boolean("active")->default(true);
            $table->text("obs")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipios');
    }
};
