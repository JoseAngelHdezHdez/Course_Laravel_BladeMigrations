<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //Relacion de muchos a muchos (inversa polimorifica)
    public function posts()
    {
        return $this->morphedByMany('App\Models\Post', 'taggable');
    }

    public function videos()
    {
        return $this->morphedByMany('App\Models\Videos', 'taggable');
    }
}
