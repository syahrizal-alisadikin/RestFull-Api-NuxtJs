<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory,SoftDeletes;

      protected $fillable = [
        'image'
    ];

     public function getImageAttribute($image)
    {
        return asset('storage/sliders/' . $image);
    }
}
