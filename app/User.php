<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function level()
    {
        $this->belongsTo(Level::class);
    }
    public function groups()
    {
        $this->belongsToMany(Group::class)->withTimestamps();
    }
    //Localización a travez de perfil
    public function location()
    {
        $this->hasOneThrough(Location::class, Profile::class);
    }

    public function posts()
    {
        $this->hasMany(Post::class);
    }

    public function videos()
    {
        $this->hasMany(Video::class);
    }

    public function comments()
    {
        $this->hasMany(Comment::class);
    }

    public function image()
    {
        $this->morphOne(Image::class, 'imageable');
    }

}
