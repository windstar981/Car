<?php

namespace Modules\BuyCar\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
       // DB::table('categories')->insert(['parent_id'=>0,'name'=>'test']);
        // $this->call("OthersTableSeeder");
    }
}
