<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function authors()
    {
        return $this->belongsTo(Author::class, 'authors_id');
    }
}
