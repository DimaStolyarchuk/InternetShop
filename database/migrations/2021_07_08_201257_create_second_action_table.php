<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_action', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('secondimage');
            $table->string('name');
            $table->string('secondname');
            $table->string('description');
            $table->string('price');
            $table->tinyInteger('action');
            $table->integer('priority');
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
        Schema::dropIfExists('second_action');
    }
}
