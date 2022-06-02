<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegisteration extends Model
{
    use HasFactory;

protected $table='student_registeration';

protected $fillable = [
    'student_id',
    'classroom_id',
    'mid_term',
    'class_work',
    'final', 'updated_at'
];

public function student() 
{
    return $this->belongsTo(Student::class, 'student_id');
}

public function teacher() 
{
    return $this->belongsTo(Teacher::class, 'teacher_id');
}

public function classroom() 
{
    return $this->belongsTo(Classroom::class, 'classroom_id');
}
}
