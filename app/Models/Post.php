<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='post';
    protected $fillable=[
        'isActive',
        'isSolve',
        'caption',
        'userID',
        'content'
        
        
    ];
    public function getImagePost()
    {
        return $this->hasMany(ImagePost::class,'idPost','id');
    }
    public function getUser(){
        return $this->hasOne(User::class,'id','userID');
    }
    public function comments(){
       
        return $this->hasMany(Comment::class,'idPost','id')->whereNull('parent_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
