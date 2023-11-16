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
        Schema::create('tshirts', function (Blueprint $table) {
            $table->id();
            $table->string('name');// nom
            $table->float('price');// prix
            $table->string('places');// lieu de fabrication
            $table->string('size');// taille
            $table->string('brand');// marque
            $table->string('color');// couleur
            $table->date('fabrication');//date de fabrication
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tshirts');
    }
};
