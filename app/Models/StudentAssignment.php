<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAssignment extends Model
{
    use HasFactory;

    protected $table = 'student_assignment';
    protected $primaryKey = 'id';
 
    			
     protected $fillable = [
         'student_id',
         'content','grade', 'assignment_id', 'classroom_id', 'updated_at'
     ];
 
     public function classroom() 
     {
         return $this->belongsTo(Classroom::class, 'classroom_id');
     }
     
     public function student() 
     {
         return $this->belongsTo(Student::class, 'student_id');
     }

     public function assignment() 
     {
         return $this->belongsTo(TeacherAssignment::class, 'assignment_id');
     }
}
