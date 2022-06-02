<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPost extends Model
{
    use HasFactory;

protected $table='student_post';
protected $primaryKey = 'id';

protected $fillable = [
    'student_id',
    'teacher_id',
    'classroom_id',
    'post',
    'content',
    'updated_at',
    

];

public function student() 
{
    return $this->belongsTo(Student::class, 'student_id');
}

public function teacher() 
{
    return $this->belongsTo(Teacher::class, 'teacher_id');
}

}
