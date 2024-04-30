<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->bigInteger('price');
            $table->integer('age');
            $table->bigInteger('kilometer_used');
            $table->enum('condition', range(1, 10));
            $table->integer('fuel_efficiency');
            $table->enum('fuel_type', ['bensin', 'diesel', 'elektrik']);
            $table->enum('safety_measurement', range(1, 10));
            $table->date('warranty_showroom');
            $table->date('warranty_store');
            $table->enum('type', ['manual', 'auto', 'semi-auto']);
            $table->text('image')->nullable()->default('default.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
