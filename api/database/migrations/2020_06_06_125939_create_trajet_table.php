<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajet', function (Blueprint $table) {
            $table->id();
            $table->string('city_start');
            $table->string('city_end');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('vehicle'); // Creer une table vehicule
            $table->integer('client_id')->unsigned()->unique();
            $table->integer('mission_id')->unsigned()->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trajet');
    }
}
