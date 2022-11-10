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
        'idUsers',
        'slug',
        'content'
        
        
    ];
    public function getImagePost()
    {
        return $this->hasMany(ImagePost::class,'idPost','id');
    }
    public function getUser(){
        return $this->hasOne(User::class,'id','idUsers');
    }
    public function comments(){
       
        return $this->hasMany(Comment::class,'idPost','id')->whereNull('parent_id')->orderBy('id','DESC');
    }
    public function getMonth()
    {
        
       return date("m",strtotime($this->created_at->format('M')));
    }
    
}
