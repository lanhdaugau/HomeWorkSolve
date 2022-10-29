<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{


    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $guard = 'admin' ;
    // Auth::guard('admin')->user()
    protected $fillable = [
        'name',
        'gender',
        'email',
        'birthday',
        'avatar',
        'activeToken',
        'phone',
        'address',
        'idCity',
        'idDistrict',
        'idWard'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
    public function getRouteKeyName()
    {
        return 'name';
    }
   public function posts(){
        return $this->hasMany(Post::class,'userID','id');
   }
=======

    public function infoLogin()
    {
        return $this->hasOne(Login::class, 'idUsers', 'id');
    }

    public function gender()
    {
        return ($this->gender == 0) ? 'Female' : 'Male';
    }
>>>>>>> 31ee70a9a4fad89bcff97151d52c6513f10eaaff
}
