<?php

namespace Database\Factories;

use App\Models\FavoriteSite;
use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteSiteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FavoriteSite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->realText(10),
            'url' =>$this->faker->url,
        ];
    }
}
