<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactContent extends Model
{
    use HasFactory;
    protected $table='contactcontent';
    protected $fillable=[
        'content',
        'idContact',
        'idAuthur'
    ];
    public function getUser()
    {
        return $this->hasOne(User::class,'id','idAuthur');
    }
}
