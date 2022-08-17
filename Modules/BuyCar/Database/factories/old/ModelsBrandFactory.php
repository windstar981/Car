<?php
namespace Modules\BuyCar\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\BuyCar\Entities\Brands;
use Modules\BuyCar\Entities\Models;

class ModelsBrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Models::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'brands_id' => Brands::factory()->create(),
        ];
    }
}

