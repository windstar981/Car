<?php

namespace Modules\BuyCar\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Seller extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        // return \Modules\BuyCar\Database\factories\SellerFactory::new();
    }

    public function product()
    {
        return $this->hasMany('Modules\BuyCar\Entities\Product');
    }

}
