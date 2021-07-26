<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'image'
    ];

     public function posts()
    {
        return $this->hasMany(Post::class);
    }

     public function getImageAttribute($image)
    {
        return asset('storage/categories/' . $image);
    }
}
