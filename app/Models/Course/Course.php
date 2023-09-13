<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static function booted()
    {
        static::created(function ($data) {
            $data->slug = random_int(100,999).$data->id.random_int(1000,9999);
            $data->save();
        });
    }

    public function Course_job_works(){
         
      return $this->hasMany(CourseJobWorks::class, 'course_id');
    }

    public function Course_modules(){
         
        return $this->hasMany(CourseModul::class, 'course_id');
      }

      public function Course_module_task_complite_by_user(){
         
        return $this->hasMany(CourseModulTaskCompleteByUsers::class, 'course_id');
      }

      public function Course_instactor(){
         
        return $this->hasMany(CourseInstructors::class, 'course_id');
      }



}
