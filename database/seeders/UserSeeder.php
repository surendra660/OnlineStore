<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {[
        $faker=Faker::create(),
        $user=new User,
        $user->user_name =faker->unique()->name(),
        $user->email = faker->unique()->safeEmail(),
        $user->phone=faker->unique()->phone(),
        $user->address= faker->address(),
        $user->email_verified_at =-faker-> now(),
        $user->password = faker->password(), // password
        $user->remember_token => Str::random(10),
    ];
    }
}
