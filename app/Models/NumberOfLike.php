<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberOfLike extends Model
{
    use HasFactory;
    protected $table='numberoflike';
    protected $fillable=['idUsers','idComment'];
    public function getUserLike(){
        return $this->hasOne(User::class,'id','idUsers');
    }
    public function getComment(){
        return $this->hasMany('idComment','id');
    }
}
