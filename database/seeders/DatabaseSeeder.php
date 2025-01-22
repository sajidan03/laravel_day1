<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Member;
use App\Models\Category;
use App\Models\Product;
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

        Category::create([
            'id' => 1,
            'name' => 'Processor'
        ]);
        Category::create([
            'id' => 2,
            'name' => 'Vga Card'
        ]);
        Category::create([
            'id' => 3,
            'name' => 'Motherboard'
        ]);
        Product::create([
            'id' => 1,
            'name' => 'Amd Ryzen 5 5600',
            'price' => 1600000,
            'desc' => 'Amd Ryzen 5 5600 Up to 4,4Ghz 6c/12t',
            'image' => 'ryzen.png',
            'categories_id' => 1,
        ]);
        Product::create([
            'id' => 2,
            'name' => 'Nvidia RTX 3060 12GB EVGA',
            'price' => 3100000,
            'desc' => 'Nvidia RTX 3060 12GB EVGA OC',
            'image' => 'rtx.webp',
            'categories_id' => 2,
        ]);
        Product::create([
            'id' => 3,
            'name' => 'Asus ROG Z970 PRO WIFI',
            'price' => 4000000,
            'desc' => 'Asus ROG Z970 PRO WIFI',
            'image' => 'mobo.jpg',
            'categories_id' => 3,
        ]);
    }
}
