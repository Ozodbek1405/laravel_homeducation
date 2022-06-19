<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name_store extends Model
{
    use HasFactory;
    protected $table = "name";
    protected $fillable = [
        'radio'
    ];
}
