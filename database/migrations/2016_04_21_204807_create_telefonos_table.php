<?php 
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Database\Migrations\Migration;
//
//class CreateTelefonosTable extends Migration
//{
//    /**
//     * Run the migrations.
//     *
//     * @return void
//     */
//    public function up()
//    {
//        Schema::create('telefonos', function (Blueprint $table) {
//            $table->increments('telefono_id');
//            $table->integer('numero_tel');
//            $table->integer('ciudadano_id')->unsigned();
//            $table->foreign('ciudadano_id')->references('ciudadano_id')->on('ciudadano');
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::drop('telefonos');
//    }
//}
