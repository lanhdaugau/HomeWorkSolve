<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentInbox extends Model
{
    use HasFactory;
    protected $table='contentinbox';
    protected $fillable=['content','idInbox'];
}
