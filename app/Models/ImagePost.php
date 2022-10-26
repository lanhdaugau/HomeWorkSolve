<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePost extends Model
{
    use HasFactory;
    protected $table='imagepost';
    protected $fillable=[
        'path_image',
        'idPost',
    ];
}
