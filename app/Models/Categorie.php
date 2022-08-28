<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'category_name',
        'category_details',
        'status',
        
    ];

    public function books()
    {   
        return $this->hasMany(Book::class,category,id);

        // hasMany(RelatedModel, foreignKeyOnRelatedModel = post_id, localKey = id)
    }
}
