<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function location()
    {
        $this->hasOneThrough(Location::class, Profile::class);
    }
}
