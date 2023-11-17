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
        Schema::create('usagers', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->UnsignedBigInteger('id_puce')->unique();
            $table->foreign('id_puce')->references('id')->on('puces')->onDelete('cascade');
            $table->UnsignedBigInteger('forfait_id');
            $table->foreign('forfait_id')->references('id')->on('tarif_forfaits')->onDelete('cascade');
            $table->UnsignedBigInteger('id_offre');
            $table->foreign('id_offre')->references('id')->on('offres')->onDelete('cascade');
            $table->string('image')->default('Logo APMF.PNG')->nullable(); 
            $table->string('nom'); 
            $table->string('prenom')->nullable(); 
            $table->string('direction');
            $table->string('service')->nullable();
            $table->string('ligne');
            $table->string('localite');
            $table->BigInteger('consommation');
            $table->Integer('status')->default(0);
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
        Schema::dropIfExists('usagers');
    }
};
