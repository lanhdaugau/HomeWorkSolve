<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table='report';
    protected $fillable = [
        'content', 
        'detail',
        'idUsers',
        'type',

    ];
    public function getUser()
    {
        return $this->hasOne(User::class,'id','idUsers');
    }
}
