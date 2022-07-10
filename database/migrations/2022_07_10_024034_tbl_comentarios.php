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
        Schema::create('tblComentarios', function (Blueprint $table) {
            $table->id();
            $table->string('comentario');
            $table->string('autor');
            $table->unsignedBigInteger('tblArticulo_id');
            $table->foreign('tblArticulo_id')
                ->references('id')
                ->on('tblArticulos');
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
        Schema::dropIfExists('tblComentarios');
    }
};
