<?php

namespace Modules\BuyCar\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BuyCar\Database\factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return ProductFactory::new();
    }
    public function images()
    {
        return $this->hasMany('Modules\BuyCar\Entities\ProductImage');
    }

    public function content()
    {
        return $this->hasOne('Modules\BuyCar\Entities\ProductContent');
    }

    public function seller()
    {
        return $this->belongsTo('Modules\BuyCar\Entities\Seller');
    }

}
