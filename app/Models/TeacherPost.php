<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPost extends Model
{
    use HasFactory;

    protected $table='teacher_post';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'teacher_id',
        'classroom_id',
        'content',
        'post',
        'updated_at',
    
    ];
}
