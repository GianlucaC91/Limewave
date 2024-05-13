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
            "Immobili",
            "Veicoli",
            "Elettronica",
            "Casa e Giardino",
            "Lavori",
            "Servizi",
            "Moda e Bellezza",
            "Sport e Tempo Libero",
            "Animali Domestici",
            "Libri e Cinema"
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
    
}
