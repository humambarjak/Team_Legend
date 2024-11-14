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
    Schema::table('players', function (Blueprint $table) {
        $table->unsignedBigInteger('team_id')->nullable();

        // Assuming teams table has an id field
        $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('players', function (Blueprint $table) {
        $table->dropForeign(['team_id']);
        $table->dropColumn('team_id');
    });
}

};
