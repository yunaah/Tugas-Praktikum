<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Dosen::class;
    public function definition(): array
    {
        return [
            'nip' => $this->faker->numerify('##########'),
            'email' => $this->faker->unique->safeEmail(),
            'nama' => $this->faker->name(),
            'tanggal_lahir' => $this->faker->date(),
            'no_hp' => $this->faker->phoneNumber()
        ];
    }
}
