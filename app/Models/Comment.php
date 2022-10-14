<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory;
    protected $table='comment';
    protected $fillable=[
        'content',
        'idPost',
        'idUsers',
        'isActive',
    ];
   public function getUser()
   {
        return $this->hasOne(User::class,'id','idUsers');
   }
   public function getLike(){
        return $this->hasMany(NumberOfLike::class,'idComment','id');
   }
   
 
}
