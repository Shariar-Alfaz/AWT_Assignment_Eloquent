<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Course_Teacher;
class Teacher extends Model
{
    protected $table='teacher';
    protected $primaryKey='id';
    public $timestamp=false;
    public function Department()
    {
        return $this->belongsTo(Department::class,'dept_id','id');
    }
    public function Course_Teacher()
    {
        return $this->hasMany(Course_Teacher::class,'tId','id');
    }
}
