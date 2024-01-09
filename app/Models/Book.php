<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author() {
        return $this->belongsTo(Authors::class);
    }

    public function category() {
        return $this->belongsTo(category::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class, 'books_has_tags');
    }
}
