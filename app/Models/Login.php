<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User;

class Login extends User
{
    use HasFactory;
    protected $table='login';
    protected $fillable=[
        'email',
        'password',
        'isActive',
        'remember_token',
        
    ];
    
}
