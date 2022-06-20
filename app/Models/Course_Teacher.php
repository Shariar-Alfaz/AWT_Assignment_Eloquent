<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Course;
class Course_Teacher extends Model
{
    protected $table='teacher_course';
    public $timestamp=false;
    public function Teacher()
    {
        return $this->belongsTo(Teacher::class,'tId','id');
    }
    public function Course()
    {
        return $this->belongsTo(Course::class,'cid','id');
    }
}
