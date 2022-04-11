<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ["name", "seflink", "authorId", "publisherId", "image", "price", "description", "categoryId", "created_at", "updated_at"];
}
