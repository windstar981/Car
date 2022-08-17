<?php

namespace Modules\BuyCar\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call("OthersTableSeeder");
        DB::table('brands')->insert([
            [
                'id' => '1',
                'name'=>'Toyota',
                'images'=>'images/home/toyota.png'
            ],
            [
                'id' => '2',
                'name'=>'MG',
                'images'=>'images/home/mg.png'
            ],
            [
                'id' => '3',
                'name'=>'Cherry',
                'images'=>'images/home/chery.png'
            ],
            [
                'id' => '4',
                'name'=>'Honda',
                'images'=>'images/home/honda.png'
            ],
            [
                'id' => '5',
                'name'=>'Mitsubishi',
                'images'=>'images/home/mitsubishi.png'
            ],
            [
                'id' => '6',
                'name'=>'Hyundai',
                'images'=>'images/home/hyundai.png'
            ],
            [
                'id' => '7',
                'name'=>'Ford',
                'images'=>'images/home/ford.png'
            ],
            [
                'id' => '8',
                'name'=>'Nissan',
                'images'=>'images/home/nissan.png'
            ],
            [
                'id' => '9',
                'name'=>'Kia',
                'images'=>'images/home/kia.png'
            ],
            [
                'id' => '10',
                'name'=>'Isuzu',
                'images'=>'images/home/isuzu.png'
            ],
            [
                'id' => '11',
                'name'=>'Suzuki',
                'images'=>'images/home/suzuki.png'
            ],
            [
                'id' => '12',
                'name'=>'Mazda',
                'images'=>'images/home/mazda.png'
            ],

        ]);
    }
}
