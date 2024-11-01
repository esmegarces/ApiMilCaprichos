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
        Schema::create('dessert', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('ID_CATEGORY')->index('id_category');
            $table->string('NAME', 20);
            $table->text('DESCRIPTION');
            $table->dateTime('DATE_ADDED')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dessert');
    }
};
