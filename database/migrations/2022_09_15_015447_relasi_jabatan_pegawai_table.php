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
        Schema::table('pegawai', function (Blueprint $table){
            $table->unsignedBigInteger('id_jabatan')->nullable();
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan');
        });
    }
    public function down()
    {
        Schema::table('pegawai', function (Blueprint $table){
            $table->string('jabatan');
            $table->dropForeign(['id_jabatan']);
        });
    }
};
