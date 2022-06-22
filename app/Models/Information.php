<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $table = "information";
    protected $fillable = [
        'type',
        'name',
        'category_name',
        'phone_number',
        'number_of_children',
        'about_children',
        'children_age',
        'teacher_gender',
        'science_lang',
        'age_teacher',
        'speciality_science_teacher',
        'degree_teacher',
        'lesson_lang',
        'resume'
    ];
}
