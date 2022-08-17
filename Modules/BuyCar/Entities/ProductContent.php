<?php

namespace Modules\BuyCar\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BuyCar\Database\factories\ProductContentFactory;
use Modules\BuyCar\Entities\Product;

class ProductContent extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return ProductContentFactory::new();
    }

    public function product()
    {
        return $this->belongsTo('Modules\BuyCar\Entities\Product');
    }

}
