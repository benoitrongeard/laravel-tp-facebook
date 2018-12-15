<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'content', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    /**
     * @param $query
     * @param $user
     * @return mixed
     */
    public function scopeReadableFor($query, $user){
        $ids = $user->friends->pluck('id')->toArray();
        array_push($ids, $user->id);

        return $this->whereIn('user_id', $ids)->orderBy('id', 'desc');
    }
}
