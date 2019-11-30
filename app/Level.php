<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function users()
    {
        $this->hasMany(User::class);
    }

    //Post a travez de usuarios
    public function posts()
    {
        $this->hasManyThrough(Post::class, User::class);
    }

    public function videos()
    {
        $this->hasManyThrough(Video::class, User::class);
    }
}
