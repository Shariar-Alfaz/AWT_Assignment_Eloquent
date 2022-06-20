<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Course_Teacher;
use App\Models\student_course;

class Course extends Model
{
    protected $table='course';
    protected $primaryKey='id';
    public $timestamp=false;
    public function Department()
    {
        return $this->belongsTo(Department::class,'dept_id','id');
    }
    public function Course_Teacher()
    {
        return $this->hasMany(Course_Teacher::class,'cid','id');
    }
    public function Student_course()
    {
        return $this->hasMany(student_course::class,'cid','id');
    }
}
