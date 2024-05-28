<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::create([
            'name' => 'electronic'
        ]);
        Categories::create([
            'name' => 'cars'
        ]);
        Categories::create([
            'name' => 'food'
        ]);
        Categories::create([
            'name' => 'drink'
        ]); 
        Categories::create([
            'name' => 'fashion'
        ]);
    }
}
