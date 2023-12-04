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
            $table->boolean('preperation')->default('false');
            $table->boolean('sent')->default('false');
            $table->boolean('recieve')->default('false');
            $table->boolean('paid')->default('false');
            $table->boolean('unpaid')->default('false');
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
