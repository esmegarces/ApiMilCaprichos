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
        Schema::create('person_dessert', function (Blueprint $table) {
            $table->integer('ID_VARIANT', true);
            $table->integer('ID_PERSON')->index('id_person');
            $table->integer('ID_DESSERT')->index('id_dessert');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_dessert');
    }
};
