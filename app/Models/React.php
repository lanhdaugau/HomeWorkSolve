<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class React extends Model
{
    use HasFactory;
    protected $table = 'react';
    protected $fillable = [
        'content',
        'rating',
        'idUsers',
        'idAuthur',
    ];
     public function getUser()
   {
        return $this->hasOne(User::class,'id','idAuthur');
   }
}
