<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','contact','city'];

    public function students()
    {
        return $this->belongsToMany(Student::class,'teacher_student');
    }
}
