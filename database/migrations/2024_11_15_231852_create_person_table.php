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
        Schema::create('person', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('NAME', 20);
            $table->string('LASTNAME', 20);
            $table->string('SECOND_LASTNAME', 20);
            $table->date('BIRTHDATE');
            $table->string('GENDER', 10);
            $table->string('EMAIL', 255)->unique('email');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
