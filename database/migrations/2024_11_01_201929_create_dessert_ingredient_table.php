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
        Schema::create('dessert_ingredient', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('ID_INGREDIENT')->index('id_ingredient');
            $table->integer('ID_DESSERT')->index('id_dessert');
            $table->decimal('QUANTITY', 10)->nullable();
            $table->tinyText('UNIT_OF_MEASURE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dessert_ingredient');
    }
};
