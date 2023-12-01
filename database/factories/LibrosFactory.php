<?php

namespace Database\Factories;

use App\Models\Libros;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libros>
 */
class LibrosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =Libros::class;

    public function definition(): array
    {
        return [
            'titulo' =>$this->faker->str(),
            'autor' =>$this->faker->sentence(),
            'isbn' =>$this->faker->randomElement([9788419780003, 9788419780003,9745219780003,9788419781233]),
            'anio_publicacion' =>$this->faker->randomElement([1970,1800,1600,2001,2005,2006]),
            'editorial' =>$this->faker->sentence(),
            'precio' =>$this->faker->randomElement([220,100,600,166.50,200,500]),
            'stock' =>$this->faker->randomElement([22,10,60,16,20,50]),
        ];
    }
}
