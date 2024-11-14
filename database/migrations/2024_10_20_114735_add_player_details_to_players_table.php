<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPlayerDetailsToPlayersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->integer('number')->nullable(); // Jersey number
            $table->integer('goals')->default(0);  // Goals scored
            $table->integer('assists')->default(0); // Assists made
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropColumn(['number', 'goals', 'assists']);
        });
    }
}
