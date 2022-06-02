<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'teacher_post';
    protected $primaryKey = 'id';
    
    // public $timestamps = true;

    // protected $casts = [
    //     'price' => 'float'
    // ];

    protected $fillable = [
        'teacher_id','classroom_id',
        'content','created_at'  , 'updated_at'
    ];
}