<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Categories extends Model
{
    use HasFactory, Translatable;
    protected $table = "categories";
    protected $translatable = ['name','description'];
}
