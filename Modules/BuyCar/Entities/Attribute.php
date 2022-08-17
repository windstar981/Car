<?php

namespace Modules\BuyCar\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BuyCar\Database\factories\AttributeFactory;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return AttributeFactory::new();
    }





}
