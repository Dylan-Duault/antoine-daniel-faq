<?php

namespace Database\Factories;

use App\Models\FaqItem;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaqItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FaqItem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => fake()->sentence(),
            'answer' => fake()->sentence(),
        ];
    }
}
