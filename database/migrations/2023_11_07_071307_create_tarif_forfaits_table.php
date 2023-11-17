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
        Schema::create('tarif_forfaits', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->UnsignedBigInteger('id_forfait');
            $table->foreign('id_forfait')->references('id')->on('forfaits')->onDelete('cascade');
            $table->UnsignedBigInteger('id_tarif');
            $table->foreign('id_tarif')->references('id')->on('tarifs')->onDelete('cascade');
            $table->string('prix');
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
        Schema::dropIfExists('tarif_forfaits');
    }
};
