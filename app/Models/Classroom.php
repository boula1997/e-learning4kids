<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'classroom';
   protected $primaryKey = 'classroom_id';


    protected $fillable = [
        'classroom_code','title',
        'course_id','teacher_id', 'content','updated_at' 
    ];

    public function course() 
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    
    public function teacher() 
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
