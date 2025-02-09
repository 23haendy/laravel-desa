<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('nama_kegiatan');
            $table->date('tanggal_dimulai');
            $table->date('tanggal_selesai');
            $table->unsignedBigInteger('sipil_id');

            $table->foreign('sipil_id')->references('id')->on('sipil');
            $table->unsignedBigInteger('petugas_id');

            $table->foreign('petugas_id')->references('id')->on('petugas');
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
        Schema::dropIfExists('suket');
    }
}
