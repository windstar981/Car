<?php
namespace Modules\BuyCar\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\BuyCar\Entities\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

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
            'type' => "car",
            'attr_pr' => json_encode([
                'price'=>$this->faker->numberBetween(10000,20000),
                'color'=> $this->faker->colorName,
                'year'=>$this->faker->numberBetween(2000,2022),
            ]),
            'description' => $this->faker->text,
        ];
    }
}

