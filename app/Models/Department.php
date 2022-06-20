<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Course;
use App\Models\Teacher;

class Department extends Model
{
    protected $table='department';
    protected $primaryKey='id';
    public $timestamp=false;
    public function Students ( )
    {
        return $this->hasMany(Student::class,'dept_id','id');
    }
    public function Courses()
    {
        return $this->hasMany(Course::class,'dept_id','id');
    }
    public function Teachers()
    {
        return $this->hasMany(Teacher::class,'dept_id','id');
    }
}
