<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cloth>
 */
class ClothFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Set the Faker locale to Indonesian (id)
        $faker = Faker::create('id_ID');
        return [
            'type' => $faker->randomElement(['Polo', 'Turtleneck', 'Kaos Polos', 'Wallet', 'Hoodie', 'Pants', 'Caps', 'Kemeja', 'Sweater']),
            'name' => $faker->randomElement(['Polo', 'Turtleneck', 'Kaos Polos', 'Wallet', 'Hoodie', 'Pants', 'Caps', 'Kemeja', 'Sweater']) . ' ' . $faker->randomElement(['White', 'Black', 'Blue', 'Brown', 'Sage']),
            'size' => $faker->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
            'color' => $faker->randomElement(['White', 'Black', 'Blue', 'Brown', 'Sage']),
            'price_per_piece' => $faker->numberBetween(100000, 500000), // Example range for price
            'description' => $faker->sentence,
            'image_url' => $faker->imageUrl(), // Example image URL
        ];
    }

    public function withName($name)
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name,
            ];
        });
    }

    public function withType($type)
    {
        return $this->state(function (array $attributes) use ($type) {
            return [
                'type' => $type,
            ];
        });
    }

    public function withSize($size)
    {
        return $this->state(function (array $attributes) use ($size) {
            return [
                'size' => $size,
            ];
        });
    }

    public function withColor($color)
    {
        return $this->state(function (array $attributes) use ($color) {
            return [
                'color' => $color,
            ];
        });
    }
}
