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
            $table->integer('fuel_efficiency');
            $table->enum('fuel_type', ['bensin', 'diesel', 'elektrik']);
            $table->date('warranty_showroom');
            $table->enum('type', ['manual', 'auto', 'semiauto']);
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
