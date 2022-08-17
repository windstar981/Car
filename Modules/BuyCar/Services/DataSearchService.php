<?php
namespace Modules\BuyCar\Services;
use Illuminate\Support\Facades\DB;
use Modules\BuyCar\Entities\Brands;

    class DataSearchService{
        public static function Brand(){
            return Brands::all();
        }
    }
?>
