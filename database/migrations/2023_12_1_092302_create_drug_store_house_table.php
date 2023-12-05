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
        Schema::create('drug_store_house', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drugs_Id')->constrained('drugs')->cascadeOnDelete();
            $table->foreignId('store_houses_Id')->constrained('store_houses')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drug_store_house');
    }
};
