<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content', 'message_id', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function message()
    {
        return $this->belongsTo(Message::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function likeOrDislike(){

        // Récupération du like de ce commentaire par cet utilisateur
        $like = $this->currentLike();

        // S'il a déjà liké
        if($like){
            $like->delete();
        }
        else{
            $this->likes()->create([
                'user_id' => Auth::user()->id
            ]);
        }
    }

    public function currentLike(){
        return $this->likes()
            ->where('user_id', Auth::user()->id)
            ->where('likeable_type', $this->morphClass)
            ->where('likeable_id', $this->id)
            ->first();
    }
}
