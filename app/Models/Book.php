<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_name',
        'author_name',
        'publisher',
        'description',
        'book_image',
        'pages',
        'category',
        'book_file',
        'statuscheck',
    ];
}
