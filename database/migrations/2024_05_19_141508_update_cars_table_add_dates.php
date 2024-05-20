<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->date('release_date')->nullable()->after('price');
            $table->date('first_registration_date')->nullable()->after('release_date');
            $table->dropColumn('age');
        });
    }

    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->integer('age')->after('price');
            $table->dropColumn('release_date');
            $table->dropColumn('first_registration_date');
        });
    }
};
