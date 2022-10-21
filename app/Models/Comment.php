<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = ['content', 'idPost', 'idUsers', 'isActive','parent_id'];
    public function getUser()
    {
        return $this->hasOne(User::class, 'id', 'idUsers');
    }

    public function getLike()
    {
        return $this->hasMany(NumberOfLike::class, 'idComment', 'id');
    }
    public function checkUserLike()
    {

        if (
            $this->getLike()
            ->where('idUsers', Auth::user()->id)
            ->first()
        ) {
            return true;
        }
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function commentable()
    {
        return $this->morphTo();
    }
    public function getPost()
    {
        return $this->belongsTo(Post::class);
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
