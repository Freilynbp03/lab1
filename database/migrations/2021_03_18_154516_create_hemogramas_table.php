<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHemogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hemogramas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('wbc');
            $table->string('rbc');
            $table->string('hgb');
            $table->string('hct');
            $table->string('mcv');
            $table->string('mch');
            $table->string('mchc');
            $table->string('plt');
            $table->integer('idpaciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hemogramas');
    }
}
