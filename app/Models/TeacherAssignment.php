<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAssignment extends Model
{
    use HasFactory;
    protected $table = 'teacher_assignment';
    protected $primaryKey = 'id';
 
    						
     protected $fillable = [
         'teacher_id','classroom_id',
         'title','description', 'topic', 'points', 'due', 'content',  'updated_at',
     ];
 
     public function classroom() 
     {
         return $this->belongsTo(Classroom::class, 'classroom_id');
     }
     
     public function teacher() 
     {
         return $this->belongsTo(Teacher::class, 'teacher_id');
     }
}
