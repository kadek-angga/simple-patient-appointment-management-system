<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'specialization' => $this->faker->randomElement(['Cardiologist', 'Dermatologist', 'Endocrinologist', 'Gastroenterologist', 'Hematologist', 'Nephrologist', 'Neurologist', 'Oncologist', 'Ophthalmologist', 'Pediatrician', 'Physiatrist', 'Psychiatrist', 'Pulmonologist', 'Radiologist', 'Rheumatologist', 'Urologist']),
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
