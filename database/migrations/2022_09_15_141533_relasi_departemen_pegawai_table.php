<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('profil', function (Blueprint $table){
            $table->unsignedBigInteger('id_pegawai')->nullable();
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai');
            $table->unsignedBigInteger('id_dapartemen')->nullable();
            $table->foreign('id_dapartemen')->references('id_dapartemen')->on('departemen');
        });
    }
    public function down()
    {
        Schema::table('profil', function (Blueprint $table){
            $table->string('pegawai');
            $table->dropForeign(['id_pegawai']);
            $table->string('departemen');
            $table->dropForeign(['id_dapartemen']);
        });
    }
};
