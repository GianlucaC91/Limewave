<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "Real Estate",
            "Vehicles",
            "Electronics",
            "Home and Garden",
            "Jobs",
            "Services",
            "Fashion and Beauty",
            "Sports and Leisure",
            "Pets",
            "Books and Education"
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
    
}
