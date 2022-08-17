<?php

namespace Modules\BuyCar\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BuyCar\Database\factories\ModelsFactory;

class BrandModel extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return ModelsFactory::new();
    }

    public function brand()
    {
        return $this->belongsTo('Modules\BuyCar\Entities\Brand');
    }

}
