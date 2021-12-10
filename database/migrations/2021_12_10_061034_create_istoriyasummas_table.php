<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoriyasummasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoriyasummas', function (Blueprint $table) {
            $table->id();
            $table->integer('idd');
            $table->integer('clent');
            $table->integer('idy');
            $table->integer('istorisumma');
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
        Schema::dropIfExists('istoriyasummas');
    }
}
