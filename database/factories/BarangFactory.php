<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'No_inventaris' => $this->faker->unique()->regexify('INV[0-9]{3}'), // Format: INV### (3 digit angka)
            'Nama_barang' => $this->faker->randomElement(['Camera', 'Meja', 'Mic', 'Troli']), // Nama barang berupa 2 kata acak
            'Jenis_barang' => $this->faker->randomElement(['Elektronik', 'Furniture', 'Alat Tulis', 'Kendaraan']), // Pilihan jenis barang
            'Merk_barang' => $this->faker->randomElement(['Sony', 'Lenovo', 'ABC', 'Aqua']), // Batas panjang 10 karakter untuk merk barang
            'Stock_barang' => $this->faker->numberBetween(1, 20), // Stok barang dalam rentang 1-100
        ];
    }
}
