<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table='contact';
    protected $fillable=[
        'admin',
        'idUsers'
    ];
    public function getContent(){
        return $this->hasMany(ContactContent::class,'idContact','id');
    }
    public function getUser()
    {
        return $this->hasOne(User::class,'id','idUsers');
    }
}
