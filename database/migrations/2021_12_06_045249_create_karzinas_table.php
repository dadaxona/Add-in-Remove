<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarzinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karzinas', function (Blueprint $table) {
            $table->id();
            $table->integer('clent');
            $table->integer('idy');
            $table->string('file'); 
            $table->string('name');
            $table->string('narx');
            $table->string('narx2');
            $table->integer('son'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karzinas');
    }
}
