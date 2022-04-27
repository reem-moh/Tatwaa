<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteer>
 */
class VolunteerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $random_Agency = Agency::inRandomOrder()->limit(1)->pluck("id")->first();
        $random_User = User::inRandomOrder()->limit(1);
        $user_id = $random_User->pluck("id")->first();
        $user_name =$random_User->pluck("name")->first();
        $user_email =$random_User->pluck("email")->first();
        $user_mobile =$random_User->pluck("mobile")->first();
        return [
            'user_id' => $user_id,
            'agency_id' => $random_Agency,
            'user_name' => $user_name,
            'user_email'=> $user_email,
            'user_mobile'=> $user_mobile,
        ];
    }
}
