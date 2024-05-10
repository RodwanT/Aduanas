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
        schema::create('requisitos_importacion', function (Blueprint $table){
            $table->id('id_requisito');
            $table->foreignId('fk_subcategoria')->constrained('subcategorias')->references('id_subcategoria')->onDelete('cascade');
            $table->text('requisitos');
            $table->text('restricciones');
            $table->text('normativas');
            $table->text('procedimientos_importacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitos_importacion');
    }
};
