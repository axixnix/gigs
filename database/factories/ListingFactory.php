<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()//to get this factory template do: php artisan  make:Factory ListingsFactory
    {
        return [
            //
            'title'=>$this->faker->sentence(),//faker is just a library that provides dummy text
            'tags'=> 'laravel,javascript',
            'company'=> $this->faker->company(),
            'location'=> $this->faker->city(),
            'email'=> $this->faker->companyEmail(),
            'website'=> $this->faker->url(),
            'description'=> $this->faker->paragraph(8),
        ];
    }
}
