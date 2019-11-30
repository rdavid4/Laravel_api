<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users()
    {
        $this->belongsToMany(User::class)->withTimestamps();
    }
}
