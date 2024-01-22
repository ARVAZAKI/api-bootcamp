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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->siswaId();
            $table->string('mapel');
            $table->bigInteger('latihan1');
            $table->bigInteger('latihan2');
            $table->bigInteger('latihan3');
            $table->bigInteger('latihan4');
            $table->bigInteger('UH1');
            $table->bigInteger('UH2');
            $table->bigInteger('UTS');
            $table->bigInteger('UAS');
            $table->bigInteger('nilai_akhir');
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
        Schema::dropIfExists('scores');
    }
};
