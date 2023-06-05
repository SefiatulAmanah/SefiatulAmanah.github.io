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
        Schema::create('walimurids', function (Blueprint $table) {
            $table->id('id_walimurid');
            $table->unsignedBigInteger('id_murid');
            $table->foreign('id_murid')->references('id_murid')->on('murids');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('alamat_ibu');
            $table->string('telp_ibu');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('alamat_ayah');
            $table->string('telp_ayah');
            $table->string('nama_wali');
            $table->string('pekerjaan_wali');
            $table->string('penghasilan_wali');
            $table->string('alamat_wali');
            $table->string('telp_wali');
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
        Schema::dropIfExists('walimurids');
    }
};
