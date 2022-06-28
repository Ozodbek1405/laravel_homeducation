<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Instruction extends Model
{
    use HasFactory, Translatable;
    protected $table = "instruction";

    protected $translatable = ['title','text'];
}
