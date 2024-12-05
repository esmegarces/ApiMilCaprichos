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
        Schema::table('dessert', function (Blueprint $table) {
            $table->foreign(['ID_CATEGORY'], 'dessert_ibfk_1')->references(['ID'])->on('category')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_PERSON'], 'dessert_ibfk_2')->references(['ID'])->on('person')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dessert', function (Blueprint $table) {
            $table->dropForeign('dessert_ibfk_1');
            $table->dropForeign('dessert_ibfk_2');
        });
    }
};
