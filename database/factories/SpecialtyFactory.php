<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialty>
 */
class SpecialtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $options =[
            'Medicina general',
            'Odontología',
            'Psicología',
            'Pediatria',
            'Urología',
            'Cardiología',
            'Neumología',
            'Ginecología',
            'Traumatología',
            'Oftalmología',
        ];


        return [
            'name' => Arr::random($options),
        ];
    }
}
