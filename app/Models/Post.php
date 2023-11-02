<?php

namespace App\Models;

class Post 
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}