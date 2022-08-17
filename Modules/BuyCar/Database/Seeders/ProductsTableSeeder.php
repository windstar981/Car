<?php

namespace Modules\BuyCar\Database\Seeders;

use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Modules\BuyCar\Entities\Product;
use function PHPUnit\Framework\isEmpty;
use Modules\BuyCar\Entities\Seller;
use Modules\BuyCar\Services\CrawlDataService;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function  run()
    {
        CrawlDataService::InsertData();
    }
}
