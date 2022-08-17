<?php

namespace Modules\BuyCar\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        // return \Modules\BuyCar\Database\factories\UserProfileFactory::new();
    }
}
