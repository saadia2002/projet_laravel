<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->String('destination');
            $table->date('date');
            $table->time('heure');
            $table->Integer('places');
            $table->timestamps();
            
            $table->foreignId('id_voy')
                  ->constrained('voyageurs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('id_avion')
                  ->constrained('avions')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
