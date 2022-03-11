<?php

namespace Database\Factories;

use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'status' => ProjectConstants::STATUS_ACTIVE,
            'accounts' => ['first' => 'first_account_detail', 'second' => 'second_account_detail'],
            'mobile_banking' => ['first' => 'first_mobile_banking_detail', 'second' => 'second_mobile_banking_detail'],
        ];
    }
}
