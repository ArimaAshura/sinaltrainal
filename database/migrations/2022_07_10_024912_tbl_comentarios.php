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
        Schema::create('tbl_comentarios', function (Blueprint $table) {
            $table->id();
            $table->string('comentario');
            $table->string('autor');
            $table->unsignedBigInteger('tbl_articulos_id');
            $table->foreign('tbl_articulos_id')
                ->references('id')
                ->on('tbl_articulos');
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
        Schema::dropIfExists('tbl_comentarios');
    }
};
