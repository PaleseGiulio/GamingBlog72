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
        Schema::create('consol_game', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consol_id');
            $table->foreign('consol_id')->references('id')->on('consols');

            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consol_game');
    }
};
