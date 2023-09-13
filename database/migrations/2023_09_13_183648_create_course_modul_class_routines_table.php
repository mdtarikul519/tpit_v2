<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseModulClassRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_modul_class_routines', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("course_module_classes_id")->unsigned()->nullable();
            $table->bigInteger("module_id")->unsigned()->nullable();
            $table->bigInteger("class_id")->unsigned()->nullable();
            $table->date("date")->nullable();
            $table->time("time")->nullable();
            $table->text("topic")->nullable();
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
        Schema::dropIfExists('course_modul_class_routines');
    }
}
