<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * (El nombre del modelo correspondiente de la fábrica.)
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     * (Definir el estado predeterminado del modelo.)
     *
     * @return array

     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->text(),
            'ficha' => Str::slug($this->faker->text()),
            'cuerpo' => $this->faker->paragraph()
        ];
    }
}
