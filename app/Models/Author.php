<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
   
    protected $fillable = ["name", "seflink", "image", "bio", "created-at", "updated-at",];
}
