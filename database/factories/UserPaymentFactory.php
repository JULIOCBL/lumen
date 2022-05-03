<?php

namespace Database\Factories;

use App\Models\UserPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserPaymentFactory extends Factory
{
    protected $model = UserPayment::class;

    public function definition(): array
    {
        return [
            'amount' => $this->faker->sentence
        ];
    }
}
