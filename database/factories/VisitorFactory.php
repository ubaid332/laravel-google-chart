<?php

namespace Database\Factories;
use App\Models\Visitor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitor>
 */
class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Visitor::class;

    public function definition()
    {
        return [
            'click' => $this->faker->randomDigit,
            'viewer' => $this->faker->randomDigit,
        ];
    }
}
