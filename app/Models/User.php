<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \App\Models;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'age',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function message()
    {
        return $this->hasMany(Message::class, 'user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'message_id', 'id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'user_id', 'id');
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'user_user', 'user_id', 'friend_id');
    }
}
