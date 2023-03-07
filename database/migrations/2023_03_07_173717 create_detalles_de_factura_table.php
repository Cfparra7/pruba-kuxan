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
        Schema::create('detalles_de_factura', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('producto_id')->unsigned()->nullable();
            $table->bigInteger('factura_id')->unsigned()->nullable();
            $table ->string('cantidad');

            $table->foreign('producto_id')->references('id')->on('producto');
            $table->foreign('factura_id')->references('id')->on('factura');



        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
