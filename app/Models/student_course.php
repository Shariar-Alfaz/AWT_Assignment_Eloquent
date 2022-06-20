<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Course;

class student_course extends Model
{
    protected $table='student_course';
    public $timestamp=false;
    public function Student()
    {
        return $this->belongsTo(Student::class,'sid','id');
    }
    public function Course(Type $var = null)
    {
        return $this->belongsTo(Course::class,'cid','id');
    }
}
