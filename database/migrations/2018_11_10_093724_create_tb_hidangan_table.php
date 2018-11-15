<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbHidanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_hidangan', function (Blueprint $table) {
            $table->increments('id_hidangan');
            $table->string('nama_hidangan');
            $table->string('deskripsi_hidangan');
            $table->string('harga_hidangan');
            $table->string('kategori_hidangan');
            $table->string('foto_hidangan');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE tb_hidangan MODIFY deskripsi_hidangan TEXT");
        DB::statement("ALTER TABLE tb_hidangan MODIFY kategori_hidangan ENUM('Burger', 'Salad', 'Dessert', 'Minuman', 'Breakfast') DEFAULT NULL;");
        DB::statement("ALTER TABLE tb_hidangan MODIFY foto_hidangan VARCHAR(255) DEFAULT NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_hidangan');
    }
}
