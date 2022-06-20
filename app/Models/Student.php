<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\student_course;
class Student extends Model
{
    protected $table = "student";
    protected $primaryKey='id';
    public $timestamp=false;
    public function Department()
    {
        return $this->belogsTo(Department::class,'dept_id','id');
    }
    public function Student_Course()
    {
     return $this->hasMany(student_course::class,'sid','id');
    }
}
