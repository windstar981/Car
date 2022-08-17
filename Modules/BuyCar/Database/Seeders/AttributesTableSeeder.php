<?php

namespace Modules\BuyCar\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $colors = ['red'  , 'blue'  , 'white'  ,' yellow'  , 'brown'  , 'black'  , 'ivory'  , 'beige'  , 'wheat'  , 'khaki'  , 'golden'  , 'coral'  , 'salmon'  , 'pink'   ];
        $trasmission = ['automanual' , 'automatic' , 'cvt' , 'shiftable_automatic' , 'manual'  ];
//        foreach($colors as $color)
//        {
//            //$name = ucfirst($color);
//            //DB::insert("insert into attributes(type,key,value,lang) vales('color','$color', '$name','EN')");
//            DB::table('attributes')->insert([
//                'type' => 'color',
//                'key' => $color,
//                'value' => ucfirst($color),
//                'lang' => 'EN'
//            ]);
//        }
        foreach($trasmission as $trans)
        {
            DB::table('attributes')->insert([
                'type' => 'transmission',
                'key' => $trans,
                'value' => ucfirst($trans),
                'lang' => 'EN'
            ]);
        }
        $body_type= ['commercial' , 'coupe' , 'hatchback' , 'minivan' , 'mpv' , 'pickup' , 'sedan' , 'suv' , 'van' , 'wagon' ];
        foreach($body_type as $body)
        {
            DB::table('attributes')->insert([
                'type' => 'body_type',
                'key' => $body,
                'value' => ucfirst($body),
                'lang' => 'EN'
            ]);
        }
        // $this->call("OthersTableSeeder");
    }
}
