<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePantInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pant_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('pf_esp')->nullable();
            $table->string('pf_med')->nullable();
            $table->longText('pf_tur')->nullable();
            $table->longText('pf_cos')->nullable();

            //campos de auditoria 
            $table->integer('ca_usu_id')->nullable();
            $table->string('ca_tipo', 10)->nullable();
            $table->dateTime('ca_fecha')->nullable();
            $table->integer('ca_estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pant_infos');
    }
}
