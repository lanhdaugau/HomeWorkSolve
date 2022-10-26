<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;
    protected $table='inbox';
    protected $fillable=['idUser1','idUser2'];
    public function getContent(){
        return $this->hasMany(ContentInbox::class,'idInbox','id');
    }
}
