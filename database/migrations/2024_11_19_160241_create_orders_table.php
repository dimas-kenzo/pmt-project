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
            $table->string('contract')->nullable(); // Kontrak
            $table->string('trader')->nullable(); // Trader
            $table->string('buyer')->nullable(); // Trader
            $table->string('fabric_type')->nullable(); // Jenis Kain
            $table->string('color')->nullable(); // Color
            $table->integer('quantity')->nullable(); // Quantiry
            $table->string('delivery')->nullable(); // Delivery
            $table->string('width')->nullable(); // Width
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
