<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\StoreInformation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Muhammad Rizki',
            'email' => 'mhdky502@gmail.com',
            'is_admin' => 1,
            'password' => Hash::make('password')
        ]);

        // Product::factory(500)->create();

        Category::create([
            'name' => 'Men Collection',
            'slug' => 'men'
        ]);
        
        Category::create([
            'name' => 'Women Collection',
            'slug' => 'women'
        ]);

        StoreInformation::create([
            'store_address'  => 'Sidodadi',
            'phone_number' => '082246924258',
            'store_email' => 'mhdky502@gmail.com',
            'instagram' => '',
            'facebook' => '',
            'open' => '09.00',
            'close' => '10.00',
        ]);
    }
}
