<?php
namespace Modules\BuyCar\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\BuyCar\Entities\City;
use Modules\BuyCar\Entities\Region;
class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' =>$this->faker->name,
            'region_id' => Region::factory()->create(),
        ];
    }
}

