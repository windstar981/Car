<?php

namespace Modules\BuyCar\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        // return \Modules\BuyCar\Database\factories\ProductImagesFactory::new();
    }

    public function product()
    {
        return $this->belongsTo('Modules\BuyCar\Entities\Product');
    }


}
