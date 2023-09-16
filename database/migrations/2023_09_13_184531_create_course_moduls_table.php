<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseModulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_moduls', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("course_id")->unsigned()->nullable();
            $table->bigInteger("moduls_no")->unsigned()->nullable();
            $table->string("title", 100)->nullable();
            $table->tinyInteger("creator")->unsigned()->nullable();
            $table->string("slug", 50)->nullable();
            $table->enum('status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('course_moduls');
    }
}
