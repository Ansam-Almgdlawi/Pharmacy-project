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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('hestoryOrder');
            $table->boolean('preperation')->default('0');
            $table->boolean('sent')->default('0');
            $table->boolean('recieve')->default('0');
            $table->boolean('paid')->default('0');
            $table->boolean('unpaid')->default('0');
            $table->foreignId('users_Id')->constrained('users');
            $table->foreignId('store_houses_Id')->constrained('store_houses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
