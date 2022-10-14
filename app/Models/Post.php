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
}
