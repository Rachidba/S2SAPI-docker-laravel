<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 125);
            $table->integer('subject_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->timestamps();

            $table->foreign('subject_id')
                    ->references('id')
                    ->on('subjects')
                    ->onDelete('cascade')
                    ->onUodate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
