<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = "applications";
    protected $fillable = [
        'type',
        'name',
        'category_name',
        'phone_number',
        'number_of_children',
        'teacher_gender',
        'science_lang',
        'age_teacher',
        'speciality_science_teacher',
        'degree_teacher',
        'lesson_lang',
        'resume'
    ];

}
