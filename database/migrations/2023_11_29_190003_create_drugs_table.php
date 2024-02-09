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
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->string('scientificName');
            $table->string('commercialName');
            $table->string('manufacturer');
            $table->integer('quantity');
            $table->date('expirationDate');
            $table->decimal('price');
            $table->boolean('isfavorite')->default(false);
            $table->foreignId('classifications_Id')->constrained('classifications')->cascadeOnDelete();
            $table->foreignId('store_houses_Id')->constrained('store_houses')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drugs');
    }
};
