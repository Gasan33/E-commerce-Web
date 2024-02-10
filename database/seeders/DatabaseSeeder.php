<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        return $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            SettingSeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            ProductAttributeSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class
        ]);
    }
}
