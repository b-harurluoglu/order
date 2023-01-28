<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        for ($i=1; $i < 1000; $i++) { 
            Product::factory()->hasAttached(
                Category::all()->random(3),
            )
            ->create();
        }
    }
}
