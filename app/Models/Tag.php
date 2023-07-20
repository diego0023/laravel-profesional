<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

   public function post(): MorphToMany{
    return $this->morphedByMany(Post::class, 'taggable');
   }

   public function video(): MorphToMany{
    return $this->morphedByMany(Video::class, 'taggable');
   }
}
