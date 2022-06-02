<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table='comments';
protected $primaryKey = 'comment_id';

protected $fillable = [
    'comments',
    'content',
    'post_id',
    'student_id',
    'teacher_id', 'updated_at'
   
    

];

public function student() 
{
    return $this->belongsTo(Student::class, 'student_id');
}

public function post() 
{
    return $this->belongsTo(StudentPost::class, 'post_id');
}

public function teacher() 
{
    return $this->belongsTo(Teacher::class, 'teacher_id');
}
}
