<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarzinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karzins', function (Blueprint $table) {
            $table->id();
            $table->integer('clent');
            $table->integer('idy');
            $table->string('file'); 
            $table->string('name');
            $table->integer('narx');
            $table->integer('narx2');
            $table->integer('son');
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
        Schema::dropIfExists('karzins');
    }
}
