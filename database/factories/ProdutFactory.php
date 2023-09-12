<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produt>
 */
class ProdutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name =$this->faker->unique()->sentence();
        return [
            'name'=> $name,
            'description'=>$this->faker->paragraph(),
            'price'=>$this->faker->randomNumber(2),
            'slug' => Str::slug($name),
            'image'=>$this->faker->imageUrl(400,400),
            'id_user'=> User::pluck('id')->random(),
            'id_category'=>Category::pluck('id')->random()
        ];
    }
}
