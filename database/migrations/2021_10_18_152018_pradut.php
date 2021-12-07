<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pradut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pradut', function (Blueprint $table) {
            $table->id();            
            $table->string('name');
            $table->string('file'); 
            $table->integer('soni');                     
            $table->integer('narx');           
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
        //
    }
}
