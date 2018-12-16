<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Models\Message
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message readableFor($user)
 * @mixin \Eloquent
 */
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
        return $this->morphMany(Like::class, 'likable');
    }

    public function likeOrDislike()
    {

        $like = $this->currentLike();
        $id = Auth()->user()->id;

        // S'il a déjà liké
        if($like){
            $like->delete();
        }
        else{
            $this->likes()->create([
                'user_id' => $id
            ]);
        }
    }

    public function liked()
    {
        if ($this->currentLike()) {
            return true;
        }
        return false;
    }

    public function currentLike()
    {
        return $this->likes()
            ->where('user_id', Auth::user()->id)
            ->first();
    }

    public function scopeReadableFor($query, $user)
    {
        $ids = $user->friends->pluck('id')->toArray();
        array_push($ids, $user->id);

        return $this->whereIn('user_id', $ids)->orderBy('id', 'desc');
    }
}
