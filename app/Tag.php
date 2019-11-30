<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        $this->morphedByMany(Post::class, 'taggable');
    }

    public function videos()
    {
        $this->morphedByMany(Tag::class, 'taggable');
    }
}
