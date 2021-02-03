<?php

namespace Database\Factories;

use App\Models\blogs;
use Illuminate\Database\Eloquent\Factories\Factory;

class blogsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = blogs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'cate_name' => $this->faker->name,
            'title' => $this->faker->name,
            'author' => $this->faker->name,
            'desc' => $this->faker->name,
            'img_name' => $this->faker->name,
        ];
    }
}
