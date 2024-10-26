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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('numero');
            
            
            /**
             * uma forma de fazer constraint
             */
            //$table->unsignedBigInteger('series_id');
            // $table->foreign('series_id')->references('id')->on('series');


            /**
             * outra forma, mais simples
             */

            
            $table->foreignId('series_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seasons');
    }
};
