<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Faq extends Model
{
    use HasFactory, Translatable;
    protected $table = "faq";
    protected $fillable = [
        'questions'
    ];
    protected $translatable = ['questions','answer'];
}
