<?php

namespace Modules\BuyCar\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BuyCar\Database\factories\CategoryFactory;

class category extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id','name'];

    protected static function newFactory()
    {
        return CategoryFactory::new();
    }


}
