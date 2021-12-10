<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoriyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoriyas', function (Blueprint $table) {
            $table->id();
            $table->integer('clent');            
            $table->string('file'); 
            $table->string('name');
            $table->integer('son');
            $table->integer('narx2');
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
        Schema::dropIfExists('istoriyas');
    }
}
