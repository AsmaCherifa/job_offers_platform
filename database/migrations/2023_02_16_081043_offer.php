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
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('title');
            $table->string('location');
            $table->string('type');
            $table->string('contract');
            $table->tinyInteger('experience');
            $table->string('language');
            $table->string('diploma');
            $table->tinyInteger('nb_place');
            $table->string('description');
            $table->string('gender');
            $table->string('missions');
            $table->string('exigences');
            $table->string('avantages');
            $table->date('expire_date');
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
};
