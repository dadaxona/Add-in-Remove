<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pribl', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('abyom');                     
            $table->integer('olinish'); 
            $table->integer('sotilish');
            $table->integer('pribl');
            $table->integer('jami');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pribl');
    }
}
