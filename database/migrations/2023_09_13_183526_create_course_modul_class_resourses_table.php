<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseModulClassResoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_modul_class_resourses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("course_module_class_id")->unsigned()->nullable();
            $table->bigInteger("course_module_id")->unsigned()->nullable();
            $table->text("resourse_content")->nullable();
            $table->string("resourse_link", 100)->nullable();
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
        Schema::dropIfExists('course_modul_class_resourses');
    }
}
