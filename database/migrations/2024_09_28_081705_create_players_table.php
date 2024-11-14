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
         Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('rating');
            $table->string('position');
            $table->string('card_type');
            $table->string('card_version');
            $table->string('playstyle')->nullable();
            $table->string('club');
            $table->string('league');
            $table->string('nation');
            $table->string('image')->nullable(); // To store the image file path
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
