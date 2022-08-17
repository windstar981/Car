<?php

namespace Modules\BuyCar\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BuyCar\Database\factories\BrandFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return BrandFactory::new();
    }
    public function model()
    {
        return $this->hasMany('Modules\BuyCar\Entities\BrandModel');
    }
}
