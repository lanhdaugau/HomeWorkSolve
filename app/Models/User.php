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
        'birthday',
        'avatar',
        'activeToken',
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

    
   public function posts(){
        return $this->hasMany(Post::class,'idUsers','id');
   }


    public function infoLogin()
    {
        return $this->hasOne(Login::class, 'idUsers', 'id');
    }

    public function gender()
    {
        
        return ($this->gender == 0) ? 'Female' : 'Male';
    }
    public function getAvatar(){
        
        if($this->avatar==null){
            return asset('avatar.png');
        }
        if(str_starts_with($this->avatar,'http')){
            return $this->avatar;
        }
        
        return asset('storage/users-avatar').'/'.$this->avatar;
    }
    public function getStar()
    {
        $ratings = $this->hasMany(React::class, 'idUsers', 'id')->get()->pluck('rating');
        $num = $ratings->count(); 
        $starSum = $ratings->sum(); 
        $starAvg = $num > 0 ? $starSum / $num : 0; 
        return $starAvg*100/5;
    }

}
