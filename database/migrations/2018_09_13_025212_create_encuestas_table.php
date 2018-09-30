<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('curso_id');
            $table->string('quiz1',500);
            $table->string('quiz2',500);
            $table->string('quiz3',500);
            $table->string('quiz4',500);
            $table->string('quiz5',500);
            $table->string('quiz6',500);
            $table->string('quiz7',500);
            $table->string('quiz8',500);
            $table->date('quiz9',500);
            $table->enum('completado', ['Si', 'No'])->default('Si');
            $table->timestamps();
            //Relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas');
    }
}
