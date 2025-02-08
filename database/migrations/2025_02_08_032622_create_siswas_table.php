<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama',30);
            $table->string('nisn',10);
            $table->enum('jk',['l','p']);
            $table->string('alamat',100);
            $table->string('no_telp',15)->nullable();
            $table->string('foto')->nullable();
            $table->foreignId('lokal_id')->references('id')->on('lokals')->onDelete('cascade');
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
        Schema::dropIfExists('siswas');
    }
}
