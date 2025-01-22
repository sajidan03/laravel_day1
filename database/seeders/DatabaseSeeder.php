<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Member;
use Faker\Guesser\Name;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'id' => 1,
            'name' => 'Muhammad Sajidan',
            'email' => 'rifansyahsajidan03@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'id' => 2,
            'name' => 'Muhammad Sajidan',
            'email' => 'akunjidan03@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        Member::create([
            'id' => 1,
            'name' => "Muhammad Sajidan",
            'no_hp' => "081563854329",
            'address' => "Sukamanah",
            'users_id' => 1,
        ]);
        Member::create([
            'id' => 2,
            'name' => "Muhammad Sajidan",
            'no_hp' => "080330005076",
            'address' => "Sukarame",
            'users_id' => 2,
        ]);
    }
}
