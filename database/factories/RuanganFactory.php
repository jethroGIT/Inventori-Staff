<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ruangan>
 */
class RuanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'No_ruangan' => $this->faker->unique()->regexify('R[0-9]{3}'), // Format: R### (3 digit angka)
            'Nama_lab' => $this->faker->randomElement(['Internet 2', 'Multimedia', 'Network', 'ADV']), // Nama barang berupa 2 kata acak
            'Kapasitas_orang' => $this->faker->numberBetween(1, 100), // Stok barang dalam rentang 1-100
        ];
    }
}
