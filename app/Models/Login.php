<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User;

class Login extends User
{
    use HasFactory;
    protected $table = 'login';
    protected $fillable = [
        'email',
        'phone',
        'password',
        'isActive',
        'remember_token',
        'idUsers',
        'role'
    ];
<<<<<<< HEAD
    public function getUser(){
        return $this->hasOne(User::class,'id','idUsers');
=======

    public function role()
    {
        return ($this->role == 0) ? 'Admin' : 'Member';
>>>>>>> 31ee70a9a4fad89bcff97151d52c6513f10eaaff
    }
}
